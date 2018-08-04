<?php namespace Indikator\Content\Models;

use Model;
use Cms\Classes\Page as CmsPage;
use Url;

class Tags extends Model
{
    use \October\Rain\Database\Traits\Sluggable;
    use \October\Rain\Database\Traits\Validation;

    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];

    protected $table = 'indikator_content_tags';

    public $rules = [
        'name' => 'required',
        'slug' => ['required', 'regex:/^[a-z0-9\/\:_\-\*\[\]\+\?\|]*$/i', 'unique:indikator_content_tags']
    ];

    protected $slugs = [
        'slug' => 'name'
    ];

    public $translatable = [
        'name',
        ['slug', 'index' => true],
        'description',
        'meta_title',
        'meta_keywords',
        'meta_desc'
    ];

    public static $allowedSorting = [
        'name asc',
        'name desc',
        'created_at asc',
        'created_at desc',
        'updated_at asc',
        'updated_at desc',
        'random'
    ];

    public function beforeSave()
    {
         unset($this->stat_view, $this->stat_date);
    }

    protected static $nameList = null;

    public static function getNameList()
    {
        if (self::$nameList) {
            return self::$nameList;
        }

        return self::$nameList = self::orderBy('name', 'asc')->lists('name', 'id');
    }

    public function setUrl($pageName, $controller)
    {
        $params = [
            'id'   => $this->id,
            'slug' => $this->slug
        ];

        return $this->url = $controller->pageUrl($pageName, $params);
    }

    public function scopeListFrontEnd($query, $options)
    {
        /*
         * Default options
         */
        extract(array_merge([
            'page'    => 1,
            'perPage' => 30,
            'sort'    => 'created_at',
            'search'  => ''
        ], $options));

        $searchableFields = [
            'name',
            'slug',
            'description'
        ];

        /*
         * Sorting
         */
        if (!is_array($sort)) {
            $sort = [$sort];
        }

        foreach ($sort as $_sort) {
            if (in_array($_sort, array_keys(self::$allowedSorting))) {
                $parts = explode(' ', $_sort);

                if (count($parts) < 2) {
                    array_push($parts, 'desc');
                }

                list($sortField, $sortDirection) = $parts;

                if ($sortField == 'random') {
                    $sortField = DB::raw('RAND()');
                }

                $query->orderBy($sortField, $sortDirection);
            }
        }

        /*
         * Search
         */
        $search = trim($search);
        if (strlen($search)) {
            $query->searchWhere($search, $searchableFields);
        }

        return $query->paginate($perPage, $page);
    }

    public static function getMenuTypeInfo($type)
    {
        if ($type == 'tags-list') {
            $result = [
                'dynamicItems' => true
            ];
        }

        if ($result) {
            $pages = CmsPage::sortBy('baseFileName')->all();
            $result['cmsPages'] = $pages;
        }

        return $result;
    }

    public static function resolveMenuItem($item, $url, $theme)
    {
        if ($item->type == 'tags-list') {
            $result = [
                'items' => []
            ];

            $elements = self::orderBy('name')->get()->all();
            foreach ($elements as $element) {
                $listItem = [
                    'title' => $element->name,
                    'url'   => Url::to(self::getItemUrl($item->cmsPage, $element, $theme)),
                    'mtime' => $element->updated_at
                ];

                $listItem['isActive'] = $listItem['url'] == $url;
                $result['items'][] = $listItem;
            }
        }

        return $result;
    }

    protected static function getItemUrl($pageCode, $item, $theme)
    {
        $page = CmsPage::loadCached($theme, $pageCode);
        if (!$page) {
            return;
        }

        $properties = $page->getComponentProperties('tagsList');
        if (!preg_match('/^\{\{([^\}]+)\}\}$/', $properties['slug'], $matches)) {
            return;
        }

        $paramName = substr(trim($matches[1]), 1);
        return CmsPage::url($page->getBaseFileName(), [$paramName => $item->slug]);
    }
}

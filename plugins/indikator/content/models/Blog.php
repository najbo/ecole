<?php namespace Indikator\Content\Models;

use Model;
use BackendAuth;
use Carbon\Carbon;
use Db;
use Cms\Classes\Page as CmsPage;
use Url;

class Blog extends Model
{
    use \October\Rain\Database\Traits\Sluggable;
    use \October\Rain\Database\Traits\Validation;

    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];

    protected $table = 'indikator_content_blog';

    public $rules = [
        'title'    => 'required',
        'slug'     => ['required', 'regex:/^[a-z0-9\/\:_\-\*\[\]\+\?\|]*$/i', 'unique:indikator_content_blog'],
        'status'   => 'required|between:1,2|numeric',
        'featured' => 'required|between:1,2|numeric'
    ];

    public $belongsToMany = [
        'categories' => [
            'Indikator\Content\Models\BlogCategories',
            'table' => 'indikator_content_blog_relations',
            'order' => 'name'
        ],
        'tags' => [
            'Indikator\Content\Models\Tags',
            'table' => 'indikator_content_tags_blog',
            'order' => 'name'
        ]
    ];

    protected $jsonable = [
        'images',
        'files',
        'related_blog',
        'related_news',
        'related_portfolio'
    ];

    protected $slugs = [
        'slug' => 'title'
    ];

    public $translatable = [
        'title',
        ['slug', 'index' => true],
        'summary',
        'content',
        'meta_title',
        'meta_keywords',
        'meta_desc'
    ];

    protected $dates = [
        'published_at',
        'stat_date'
    ];

    public static $allowedSorting = [
        'title asc',
        'title desc',
        'created_at asc',
        'created_at desc',
        'updated_at asc',
        'updated_at desc',
        'published_at asc',
        'published_at desc',
        'random'
    ];

    public function beforeSave()
    {
        unset($this->stat_view, $this->stat_date);
    }

    public function afterDelete()
    {
        Db::table('indikator_content_blog_relations')->where('blog_id', $this->id)->delete();
        Db::table('indikator_content_tags_blog')->where('blog_id', $this->id)->delete();
    }

    public function getBlogIdOptions()
    {
        $result = [];

        foreach (Blog::where('status', 1)->orderBy('published_at', 'desc')->get()->all() as $item) {
            $result[$item->id] = substr($item->published_at, 0, 10).' | '.$item->title;
        }

        return $result;
    }

    public function getNewsIdOptions()
    {
        $result = [];

        foreach (News::where('status', 1)->orderBy('published_at', 'desc')->get()->all() as $item) {
            $result[$item->id] = substr($item->published_at, 0, 10).' | '.$item->title;
        }

        return $result;
    }

    public function getPortfolioIdOptions()
    {
        $result = [];

        foreach (Portfolio::where('status', 1)->orderBy('published_at', 'desc')->get()->all() as $item) {
            $result[$item->id] = substr($item->published_at, 0, 10).' | '.$item->title;
        }

        return $result;
    }

    public function getAuthorIdOptions()
    {
        return Author::getNameList();
    }

    public function scopeFilterCategories($query, $categories)
    {
        return $query->whereHas('categories', function($q) use ($categories) {
            $q->whereIn('id', $categories);
        });
    }

    public function scopeFilterTags($query, $tags)
    {
        return $query->whereHas('tags', function($q) use ($tags) {
            $q->whereIn('id', $tags);
        });
    }

    public function scopeIsPublished($query)
    {
        if (BackendAuth::check()) {
            return $query;
        }

        return $query
            ->where('status', 1)
            ->whereNotNull('published_at')
            ->where('published_at', '<', Carbon::now())
        ;
    }

    public function scopeListFrontEnd($query, $options)
    {
        /*
         * Default options
         */
        extract(array_merge([
            'page'       => 1,
            'perPage'    => 30,
            'sort'       => 'created_at',
            'categories' => null,
            'category'   => null,
            'search'     => '',
            'published'  => true
        ], $options));

        $searchableFields = [
            'title',
            'slug',
            'summary',
            'content'
        ];

        if ($published) {
            $query->isPublished();
        }

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
                    $sortField = Db::raw('RAND()');
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

        /*
         * Categories
         */
        if ($categories !== null) {
            if (!is_array($categories)) {
                $categories = [$categories];
            }

            $query->whereHas('categories', function($q) use ($categories) {
                $q->whereIn('id', $categories);
            });
        }

        /*
         * Category
         */
        if ($category !== null) {
            $category = BlogCategories::find($category);

            $query->whereHas('categories', function($q) use ($category) {
                $q->where('id', $category->id);
            });
        }

        return $query->paginate($perPage, $page);
    }

    public function setUrl($pageName, $controller)
    {
        $params = [
            'id'   => $this->id,
            'slug' => $this->slug
        ];

        if (array_key_exists('categories', $this->getRelations())) {
            $params['category'] = $this->categories->count() ? $this->categories->first()->slug : null;
        }

        return $this->url = $controller->pageUrl($pageName, $params);
    }

    public static function getMenuTypeInfo($type)
    {
        if ($type == 'blog-page') {
            $references = [];
            $items = self::orderBy('title')->get()->all();

            foreach ($items as $item) {
                $references[$item->id] = $item->title;
            }

            $result = [
                'references'   => $references,
                'nesting'      => false,
                'dynamicItems' => false
            ];
        }

        else if ($type == 'blog-list') {
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
        if ($item->type == 'blog-page') {
            if (!$item->reference || !$item->cmsPage) {
                return;
            }

            $element = self::find($item->reference);
            if (!$element) {
                return;
            }

            $pageUrl = self::getItemUrl($item->cmsPage, $element, $theme);
            if (!$pageUrl) {
                return;
            }

            $pageUrl = Url::to($pageUrl);
            $result = [];
            $result['url'] = $pageUrl;
            $result['isActive'] = $pageUrl == $url;
            $result['mtime'] = $element->updated_at;
        }

        else if ($item->type == 'blog-list') {
            $result = [
                'items' => []
            ];

            $elements = self::where('status', 1)->where('published_at', '<', date('Y-m-d H:i:s'))->orderBy('title')->get()->all();
            foreach ($elements as $element) {
                $listItem = [
                    'title' => $element->title,
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

        $properties = $page->getComponentProperties('blogPage');
        if (!preg_match('/^\{\{([^\}]+)\}\}$/', $properties['slug'], $matches)) {
            return;
        }

        $paramName = substr(trim($matches[1]), 1);
        return CmsPage::url($page->getBaseFileName(), [$paramName => $item->slug]);
    }

    private $_categories = null;
    private $_tags = null;

    public function getCategories()
    {
        if ($this->_categories === null) {
            $this->_categories = [];
            $list = Db::table('indikator_content_blog_relations')->where('blog_id', $this->id)->get()->all();
            
            foreach ($list as $item) {
                $category = BlogCategories::whereId($item->blog_categories_id)->first();

                if ($category->status == 1) {
                    $this->_categories[$item->blog_categories_id] = [
                        'name' => $category->name,
                        'slug' => $category->slug
                    ];
                }
            }
        }

        return $this->_categories;
    }

    public function getTags()
    {
        if ($this->_tags === null) { 
            $this->_tags = [];
            $list = Db::table('indikator_content_tags_blog')->where('blog_id', $this->id)->get()->all();
            
            foreach ($list as $item) {
                $tag = Tags::whereId($item->tags_id)->first();

                $this->_tags[$item->tags_id] = [
                    'name' => $tag->name,
                    'slug' => $tag->slug
                ];
            }
        }

        return $this->_tags;
    }
}

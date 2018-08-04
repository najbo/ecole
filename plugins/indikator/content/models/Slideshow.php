<?php namespace Indikator\Content\Models;

use Model;
use BackendAuth;
use Cms\Classes\Page;
use Cms\Classes\Theme;
use System\Classes\PluginManager;
use Db;

class Slideshow extends Model
{
    use \October\Rain\Database\Traits\Sortable;
    use \October\Rain\Database\Traits\Validation;

    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];

    protected $table = 'indikator_content_slideshow';

    public $rules = [
        'title'  => 'required',
        'type'   => 'between:0,6|numeric',
        'status' => 'required|between:1,2|numeric'
    ];

    public $translatable = [
        'title',
        'subtitle',
        'button',
        'content'
    ];

    public static $allowedSorting = [
        'sort_order asc',
        'sort_order desc',
        'created_at asc',
        'created_at desc',
        'updated_at asc',
        'updated_at desc',
        'random'
    ];

    public function getStyleOptions()
    {
        $result = [0 => 'indikator.content::lang.form.type_none'];
        $sql = SlideshowStyle::orderBy('title', 'asc')->get()->all();

        foreach ($sql as $item) {
            $result[$item->id] = $item->title;

            if ($item->common != '') {
                $result[$item->id] .= ' ('.$item->common.')';
            }
        }

        return $result;
    }

    public function getTypeOptions()
    {
        $user = BackendAuth::getUser();

        $result[0] = 'indikator.content::lang.form.type_none';
        $result[1] = 'indikator.content::lang.form.type_page';

        if ($user->hasAccess('indikator.content.blog') && Db::table('indikator_content_blog')->where('status', 1)->count() > 0) {
            $result[2] = 'indikator.content::lang.form.type_blog';
        }

        $pluginManager = PluginManager::instance()->findByIdentifier('RainLab.Blog');
        if ($pluginManager && !$pluginManager->disabled && $user->hasAccess('rainlab.blog.access_posts') && Db::table('rainlab_blog_posts')->where('published', 1)->count() > 0) {
            $result[6] = 'indikator.content::lang.form.type_rainlab_blog';
        }

        if ($user->hasAccess('indikator.content.news') && Db::table('indikator_content_news')->where('status', 1)->count() > 0) {
            $result[3] = 'indikator.content::lang.form.type_news';
        }

        if ($user->hasAccess('indikator.content.portfolio') && Db::table('indikator_content_portfolio')->where('status', 1)->count() > 0) {
            $result[4] = 'indikator.content::lang.form.type_portfolio';
        }

        $result[5] = 'indikator.content::lang.form.type_external';

        return $result;
    }

    public function getTypePageOptions()
    {
        $result = [];
        $pages = Page::sortBy('baseFileName')->all();

        foreach ($pages as $page) {
            $result[$page->url] = $page->title;
        }

        $pluginManager = PluginManager::instance()->findByIdentifier('RainLab.Pages');
        if (!$pluginManager || $pluginManager->disabled) {
            return $result;
        }

        $pages = \RainLab\Pages\Classes\Page::listInTheme(Theme::getActiveTheme());

        foreach ($pages as $page) {
            if (array_key_exists('title', $page->viewBag)) {
                $result[$page->viewBag['url']] = $page->viewBag['title'];
            }
        }

        natsort($result);

        return $result;
    }

    public function getTypeBlogOptions()
    {
        $result = [];
        $sql = Blog::where('status', 1)->orderBy('created_at', 'desc')->get()->all();

        foreach ($sql as $item) {
            $result[$item->slug] = substr($item->published_at, 0, 10).' | '.$item->title;
        }

        return $result;
    }

    public function getTypeNewsOptions()
    {
        $result = [];
        $sql = News::where('status', 1)->orderBy('created_at', 'desc')->get()->all();

        foreach ($sql as $item) {
            $result[$item->slug] = substr($item->published_at, 0, 10).' | '.$item->title;
        }

        return $result;
    }

    public function getTypePortfolioOptions()
    {
        $result = [];
        $sql = Portfolio::where('status', 1)->orderBy('created_at', 'desc')->get()->all();

        foreach ($sql as $item) {
            $result[$item->slug] = substr($item->published_at, 0, 10).' | '.$item->title;
        }

        return $result;
    }

    public function getTypeRainlabBlogOptions()
    {
        $user = BackendAuth::getUser();
        $result = [];

        if (PluginManager::instance()->exists('RainLab.Blog') && $user->hasAccess('rainlab.blog.access_posts')) {
            $sql = Db::table('rainlab_blog_posts')->where('published', 1)->orderBy('created_at', 'desc')->get()->all();

            foreach ($sql as $item) {
                $result[$item->slug] = substr($item->published_at, 0, 10).' | '.$item->title;
            }
        }

        return $result;
    }

    public function getCategoryOptions()
    {
        $result = [0 => 'indikator.content::lang.form.type_none'];
        $sql = SlideshowCategories::orderBy('name', 'asc')->get()->all();

        foreach ($sql as $item) {
            $result[$item->id] = $item->name;
        }

        return $result;
    }

    public function beforeSave()
    {
        if ($this->type == 0) {
            $this->slug = '';
        }

        else if ($this->type == 1) {
            $this->slug = $this->type_page;
        }

        else if ($this->type == 2) {
            $this->slug = $this->type_blog;
        }

        else if ($this->type == 3) {
            $this->slug = $this->type_news;
        }

        else if ($this->type == 4) {
            $this->slug = $this->type_portfolio;
        }

        else if ($this->type == 5) {
            $this->slug = $this->type_external;
        }

        else if ($this->type == 6) {
            $this->slug = $this->type_rainlab_blog;
        }

        if ($this->type != 0 && $this->type != 1 && $this->type != 5) {
            $this->slug = '/'.$this->slug;
        }
    }

    public function scopeIsPublished($query)
    {
        return $query->where('status', 1);
    }

    public function scopeListFrontEnd($query, $options)
    {
        /*
         * Default options
         */
        extract(array_merge([
            'page'      => 1,
            'perPage'   => 30,
            'sort'      => 'created_at',
            'search'    => '',
            'published' => true
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

        return $query->paginate($perPage, $page);
    }
}

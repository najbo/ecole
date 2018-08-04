<?php namespace Indikator\Content\Components;

use Cms\Classes\ComponentBase;
use Cms\Classes\Page;
use Indikator\Content\Models\News as ItemPost;
use Indikator\Content\Models\NewsCategories as ItemCategory;
use Lang;
use Redirect;

class NewsList extends ComponentBase
{
    public $posts;

    public $pageParam;

    public $category;

    public $noPostsMessage;

    public $postPage;

    public $categoryPage;

    public $sortOrder;

    public function componentDetails()
    {
        return [
            'name'        => 'indikator.content::lang.components.news_list_name',
            'description' => ''
        ];
    }

    public function defineProperties()
    {
        return [
            'pageNumber' => [
                'title'   => 'indikator.content::lang.components.pagination',
                'type'    => 'string',
                'default' => '{{ :page }}'
            ],
            'categoryFilter' => [
                'title'   => 'indikator.content::lang.components.filter',
                'type'    => 'dropdown',
                'default' => ''
            ],
            'postsPerPage' => [
                'title'             => 'indikator.content::lang.components.per_page',
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'indikator.content::lang.components.per_page_validation',
                'default'           => '10'
            ],
            'noPostsMessage' => [
                'title'             => 'indikator.content::lang.components.no_items',
                'type'              => 'string',
                'default'           => Lang::get('indikator.content::lang.components.news_no_items'),
                'showExternalParam' => false
            ],
            'sortOrder' => [
                'title'   => 'indikator.content::lang.components.order',
                'type'    => 'dropdown',
                'options' => [
                    'title asc'         => Lang::get('indikator.content::lang.sorting.title_asc'),
                    'title desc'        => Lang::get('indikator.content::lang.sorting.title_desc'),
                    'created_at asc'    => Lang::get('indikator.content::lang.sorting.created_asc'),
                    'created_at desc'   => Lang::get('indikator.content::lang.sorting.created_desc'),
                    'updated_at asc'    => Lang::get('indikator.content::lang.sorting.updated_asc'),
                    'updated_at desc'   => Lang::get('indikator.content::lang.sorting.updated_desc'),
                    'published_at asc'  => Lang::get('indikator.content::lang.sorting.published_asc'),
                    'published_at desc' => Lang::get('indikator.content::lang.sorting.published_desc'),
                    'random'            => Lang::get('indikator.content::lang.sorting.random')
                ],
                'default' => 'published_at desc'
            ],
            'categoryPage' => [
                'title'   => 'indikator.content::lang.components.category_page',
                'type'    => 'dropdown',
                'default' => 'blog/category',
                'group'   => 'indikator.content::lang.components.links'
            ],
            'postPage' => [
                'title'   => 'indikator.content::lang.components.subpage',
                'type'    => 'dropdown',
                'default' => 'blog/post',
                'group'   => 'indikator.content::lang.components.links'
            ]
        ];
    }

    public function getCategoryFilterOptions()
    {
        return ['' => Lang::get('indikator.content::lang.components.none')] + ItemCategory::lists('name', 'slug');
    }

    public function getCategoryPageOptions()
    {
        return Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
    }

    public function getPostPageOptions()
    {
        return Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
    }

    public function onRun()
    {
        $this->prepareVars();

        $this->category = $this->page['category'] = $this->loadCategory();
        $this->posts = $this->page['posts'] = $this->listPosts();

        if ($pageNumberParam = $this->paramName('pageNumber')) {
            $currentPage = $this->property('pageNumber');

            if ($currentPage > ($lastPage = $this->posts->lastPage()) && $currentPage > 1) {
                return Redirect::to($this->currentPageUrl([$pageNumberParam => $lastPage]));
            }
        }
    }

    protected function prepareVars()
    {
        $this->pageParam = $this->page['pageParam'] = $this->paramName('pageNumber');
        $this->noPostsMessage = $this->page['noPostsMessage'] = $this->property('noPostsMessage');

        $this->postPage = $this->page['postPage'] = $this->property('postPage');
        $this->categoryPage = $this->page['categoryPage'] = $this->property('categoryPage');
    }

    protected function listPosts()
    {
        $category = $this->category ? $this->category->id : null;

        $posts = ItemPost::with('categories')->listFrontEnd([
            'page'     => $this->property('pageNumber'),
            'sort'     => $this->property('sortOrder'),
            'perPage'  => $this->property('postsPerPage'),
            'search'   => trim(input('search')),
            'category' => $category
        ]);

        $posts->each(function($post) {
            $post->setUrl($this->postPage, $this->controller);

            $post->categories->each(function($category) {
                $category->setUrl($this->categoryPage, $this->controller);
            });
        });

        return $posts;
    }

    protected function loadCategory()
    {
        if (!$slug = $this->property('categoryFilter')) {
            return null;
        }

        $category = new ItemCategory;

        $category = $category->isClassExtendedWith('RainLab.Translate.Behaviors.TranslatableModel')
            ? $category->transWhere('slug', $slug)
            : $category->where('slug', $slug);

        $category = $category->first();

        return $category ?: null;
    }
}

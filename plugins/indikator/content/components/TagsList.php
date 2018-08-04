<?php namespace Indikator\Content\Components;

use Cms\Classes\ComponentBase;
use Cms\Classes\Page;
use Indikator\Content\Models\Tags as ItemPost;
use Lang;
use Redirect;

class TagsList extends ComponentBase
{
    public $posts;

    public $pageParam;

    public $noPostsMessage;

    public $postPage;

    public $sortOrder;

    public function componentDetails()
    {
        return [
            'name'        => 'indikator.content::lang.components.tags_list_name',
            'description' => ''
        ];
    }

    public function defineProperties()
    {
        return [
            'slug' => [
                'title'   => 'indikator.content::lang.components.slug',
                'type'    => 'string',
                'default' => '{{ :slug }}'
            ],
            'pageNumber' => [
                'title'   => 'indikator.content::lang.components.pagination',
                'type'    => 'string',
                'default' => '{{ :page }}'
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
                'default'           => Lang::get('indikator.content::lang.components.blog_no_items'),
                'showExternalParam' => false
            ],
            'sortOrder' => [
                'title'   => 'indikator.content::lang.components.order',
                'type'    => 'dropdown',
                'options' => [
                    'name asc'        => Lang::get('indikator.content::lang.sorting.title_asc'),
                    'name desc'       => Lang::get('indikator.content::lang.sorting.title_desc'),
                    'created_at asc'  => Lang::get('indikator.content::lang.sorting.created_asc'),
                    'created_at desc' => Lang::get('indikator.content::lang.sorting.created_desc'),
                    'updated_at asc'  => Lang::get('indikator.content::lang.sorting.updated_asc'),
                    'updated_at desc' => Lang::get('indikator.content::lang.sorting.updated_desc'),
                    'random'          => Lang::get('indikator.content::lang.sorting.random')
                ],
                'default' => 'name asc'
            ],
            'postPage' => [
                'title'   => 'indikator.content::lang.components.subpage',
                'type'    => 'dropdown',
                'default' => 'tags',
                'group'   => 'indikator.content::lang.components.links'
            ]
        ];
    }

    public function getPostPageOptions()
    {
        return Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
    }

    public function onRun()
    {
        $this->prepareVars();

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
    }

    protected function listPosts()
    {
        $posts = ItemPost::listFrontEnd([
            'page'    => $this->property('pageNumber'),
            'sort'    => $this->property('sortOrder'),
            'perPage' => $this->property('postsPerPage'),
            'search'  => trim(input('search'))
        ]);

        $posts->each(function($post) {
            $post->setUrl($this->postPage, $this->controller);
        });

        return $posts;
    }
}

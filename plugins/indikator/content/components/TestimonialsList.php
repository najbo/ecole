<?php namespace Indikator\Content\Components;

use Cms\Classes\ComponentBase;
use Cms\Classes\Page;
use Indikator\Content\Models\Testimonials as ItemPost;
use Lang;
use Redirect;

class TestimonialsList extends ComponentBase
{
    public $posts;

    public $pageParam;

    public $noPostsMessage;

    public $postPage;

    public $sortOrder;

    public function componentDetails()
    {
        return [
            'name'        => 'indikator.content::lang.components.testimonials_list_name',
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
                'default'           => Lang::get('indikator.content::lang.components.testimonials_no_items'),
                'showExternalParam' => false
            ],
            'sortOrder' => [
                'title'   => 'indikator.content::lang.components.order',
                'type'    => 'dropdown',
                'options' => [
                    'sort_order asc'  => Lang::get('indikator.content::lang.sorting.order_asc'),
                    'sort_order desc' => Lang::get('indikator.content::lang.sorting.order_desc'),
                    'title asc'       => Lang::get('indikator.content::lang.sorting.title_asc'),
                    'title desc'      => Lang::get('indikator.content::lang.sorting.title_desc'),
                    'created_at asc'  => Lang::get('indikator.content::lang.sorting.created_asc'),
                    'created_at desc' => Lang::get('indikator.content::lang.sorting.created_desc'),
                    'updated_at asc'  => Lang::get('indikator.content::lang.sorting.updated_asc'),
                    'updated_at desc' => Lang::get('indikator.content::lang.sorting.updated_desc'),
                    'random'          => Lang::get('indikator.content::lang.sorting.random')
                ],
                'default' => 'sort_order asc'
            ]
        ];
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
    }

    protected function listPosts()
    {
        $posts = ItemPost::listFrontEnd([
            'page'    => $this->property('pageNumber'),
            'sort'    => $this->property('sortOrder'),
            'perPage' => $this->property('postsPerPage'),
            'search'  => trim(input('search'))
        ]);

        return $posts;
    }
}

<?php namespace Indikator\Content\Components;

use Cms\Classes\ComponentBase;
use Cms\Classes\Page;
use Indikator\Content\Models\Slideshow as ItemPost;
use Lang;

class SlideshowList extends ComponentBase
{
    public $posts;

    public $sortOrder;

    public function componentDetails()
    {
        return [
            'name'        => 'indikator.content::lang.components.slideshow_list_name',
            'description' => ''
        ];
    }

    public function defineProperties()
    {
        return [
            'sortOrder' => [
                'title'   => 'indikator.content::lang.components.order',
                'type'    => 'dropdown',
                'options' => [
                    'sort_order asc'  => Lang::get('indikator.content::lang.sorting.order_asc'),
                    'sort_order desc' => Lang::get('indikator.content::lang.sorting.order_desc'),
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
        $this->posts = $this->page['posts'] = $this->listPosts();
    }

    protected function listPosts()
    {
        $posts = ItemPost::listFrontEnd([
            'sort' => $this->property('sortOrder')
        ]);

        return $posts;
    }
}

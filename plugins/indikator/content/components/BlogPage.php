<?php namespace Indikator\Content\Components;

use Cms\Classes\ComponentBase;
use Cms\Classes\Page;
use Indikator\Content\Models\Blog;
use Indikator\Content\Models\News;
use Indikator\Content\Models\Portfolio;
use Redirect;
use BackendAuth;

class BlogPage extends ComponentBase
{
    public $post;

    public $categoryPage;

    public function componentDetails()
    {
        return [
            'name'        => 'indikator.content::lang.components.blog_page_name',
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
            'categoryPage' => [
                'title'   => 'indikator.content::lang.components.category_page',
                'type'    => 'dropdown',
                'default' => 'blog/category'
            ],
            'redirectPage' => [
                'title'   => 'indikator.content::lang.components.redirect_page',
                'type'    => 'dropdown',
                'default' => '404'
            ]
        ];
    }

    public function getCategoryPageOptions()
    {
        return Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
    }

    public function getRedirectPageOptions()
    {
        return Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
    }

    public function onRun()
    {
        $this->categoryPage = $this->page['categoryPage'] = $this->property('categoryPage');
        $this->post = $this->page['post'] = $this->loadPost();

        $this->page['related_blog'] = $this->related_post('blog', $this->post->related_blog);
        $this->page['related_news'] = $this->related_post('news', $this->post->related_news);
        $this->page['related_portfolio'] = $this->related_post('portfolio', $this->post->related_portfolio);
    }

    protected function loadPost()
    {
        /* Select post */
        $slug = $this->property('slug');
        $post = new Blog;

        $post = $post->isClassExtendedWith('RainLab.Translate.Behaviors.TranslatableModel')
            ? $post->transWhere('slug', $slug)
            : $post->where('slug', $slug);

        $post = $post->isPublished();

        /* Error 404 */
        if ($post->count() == 0) {
            return Redirect::to($this->property('redirectPage'));
        }

        $post = $post->first();

        /* Category url */
        if ($post && $post->categories->count()) {
            $post->categories->each(function($category) {
                $category->setUrl($this->categoryPage, $this->controller);
            });
        }

        /* Page details */
        if ($post->meta_title == '') {
            $post->meta_title = $post->title;
        }
        if ($post->meta_desc == '') {
            $post->meta_desc = strip_tags($post->summary);
        }
        if ($post->meta_keywords == '') {
            $post->meta_keywords = $this->page->meta_keywords;
        }
        else if ($this->page->meta_keywords != '') {
            $post->meta_keywords .= ', '.$this->page->meta_keywords;
        }

        $this->page->title = $post->title.' - '.$this->page->title;
        $this->page->description = strip_tags($post->summary);
        $this->page->meta_title = $post->meta_title;
        $this->page->meta_description = $post->meta_desc;
        $this->page->meta_keywords = $post->meta_keywords;

        /* Statistics */
        if (!BackendAuth::check()) {
            Blog::whereId($post->id)->update([
                'stat_view' => ++$post->stat_view,
                'stat_date' => date('Y-m-d H:i:s')
            ]);
        }

        /* Finish */
        return $post;
    }

    protected function related_post($type, $items)
    {
        if ($type == 'blog') {
            $query = new Blog;
        }
        else if ($type == 'news') {
            $query = new News;
        }
        else {
            $query = new Portfolio;
        }

        return $query::whereIn('id', $items)->isPublished()->get();
    }
}

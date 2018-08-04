<?php namespace Indikator\Content\ReportWidgets;

use Backend\Classes\ReportWidgetBase;
use Exception;
use Indikator\Content\Models\Blog;
use Indikator\Content\Models\News;
use Indikator\Content\Models\Portfolio;
use Indikator\Content\Models\Slideshow;
use Indikator\Content\Models\Testimonials;
use Indikator\Content\Models\Tags;

class Summary extends ReportWidgetBase
{
    public function render()
    {
        try {
            $this->loadData();
        }
        catch (Exception $ex) {
            $this->vars['error'] = $ex->getMessage();
        }

        return $this->makePartial('widget');
    }

    public function defineProperties()
    {
        return [
            'title' => [
                'title'             => 'backend::lang.dashboard.widget_title_label',
                'default'           => 'indikator.content::lang.widget.summary',
                'type'              => 'string',
                'validationPattern' => '^.+$',
                'validationMessage' => 'backend::lang.dashboard.widget_title_error'
            ],
            'show_blog' => [
                'title'             => 'indikator.content::lang.widget.show_blog',
                'default'           => true,
                'type'              => 'checkbox'
            ],
            'show_news' => [
                'title'             => 'indikator.content::lang.widget.show_news',
                'default'           => true,
                'type'              => 'checkbox'
            ],
            'show_portfolio' => [
                'title'             => 'indikator.content::lang.widget.show_portfolio',
                'default'           => true,
                'type'              => 'checkbox'
            ],
            'show_slideshow' => [
                'title'             => 'indikator.content::lang.widget.show_slideshow',
                'default'           => true,
                'type'              => 'checkbox'
            ],
            'show_testimonials' => [
                'title'             => 'indikator.content::lang.widget.show_testimonials',
                'default'           => true,
                'type'              => 'checkbox'
            ],
            'show_tags' => [
                'title'             => 'indikator.content::lang.widget.show_tags',
                'default'           => true,
                'type'              => 'checkbox'
            ]
        ];
    }

    protected function loadData()
    {
        $this->vars['blog'] = Blog::count();
        $this->vars['news'] = News::count();
        $this->vars['portfolio'] = Portfolio::count();
        $this->vars['slideshow'] = Slideshow::count();
        $this->vars['testimonials'] = Testimonials::count();
        $this->vars['tags'] = Tags::count();
    }
}

<?php namespace Indikator\Content\ReportWidgets;

use Backend\Classes\ReportWidgetBase;
use Exception;
use Indikator\Content\Models\Blog as Post;

class NewBlog extends ReportWidgetBase
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
                'default'           => 'indikator.content::lang.widget.newblog',
                'type'              => 'string',
                'validationPattern' => '^.+$',
                'validationMessage' => 'backend::lang.dashboard.widget_title_error'
            ],
            'piece' => [
                'title'             => 'indikator.content::lang.widget.show_piece',
                'default'           => 5,
                'type'              => 'dropdown',
                'options'           => [3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10, 11 => 11, 12 => 12]
            ],
            'date' => [
                'title'             => 'indikator.content::lang.widget.show_date',
                'default'           => true,
                'type'              => 'checkbox'
            ]
        ];
    }

    protected function loadData()
    {
        $this->vars['posts'] = Post::where('status', 1)->orderBy('published_at', 'desc')->take($this->property('piece'))->get()->all();
    }
}

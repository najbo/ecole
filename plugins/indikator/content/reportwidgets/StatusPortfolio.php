<?php namespace Indikator\Content\ReportWidgets;

use Backend\Classes\ReportWidgetBase;
use Exception;
use Indikator\Content\Models\Portfolio as Post;

class StatusPortfolio extends ReportWidgetBase
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
                'default'           => 'indikator.content::lang.widget.statusportfolio',
                'type'              => 'string',
                'validationPattern' => '^.+$',
                'validationMessage' => 'backend::lang.dashboard.widget_title_error'
            ],
            'total' => [
                'title'             => 'indikator.content::lang.widget.show_total',
                'default'           => true,
                'type'              => 'checkbox'
            ],
            'active' => [
                'title'             => 'indikator.content::lang.widget.show_active',
                'default'           => true,
                'type'              => 'checkbox'
            ],
            'inactive' => [
                'title'             => 'indikator.content::lang.widget.show_inactive',
                'default'           => true,
                'type'              => 'checkbox'
            ],
            'draft' => [
                'title'             => 'indikator.content::lang.widget.show_draft',
                'default'           => true,
                'type'              => 'checkbox'
            ]
        ];
    }

    protected function loadData()
    {
        $this->vars['active']   = Post::where('status', 1)->count();
        $this->vars['inactive'] = Post::where('status', 2)->count();
        $this->vars['total']    = $this->vars['active'] + $this->vars['inactive'];
    }
}

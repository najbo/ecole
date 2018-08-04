<?php namespace Indikator\Content\Models;

use Backend\Models\ExportModel;

class PortfolioExport extends ExportModel
{
    public $table = 'indikator_content_portfolio';

    public function exportData($columns, $sessionKey = null)
    {
        return self::make()->get()->toArray();
    }
}

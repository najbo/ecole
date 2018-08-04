<?php namespace Indikator\Content\Models;

use Backend\Models\ExportModel;

class NewsExport extends ExportModel
{
    public $table = 'indikator_content_news';

    public function exportData($columns, $sessionKey = null)
    {
        return self::make()->get()->toArray();
    }
}

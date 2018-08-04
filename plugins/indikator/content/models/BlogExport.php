<?php namespace Indikator\Content\Models;

use Backend\Models\ExportModel;

class BlogExport extends ExportModel
{
    public $table = 'indikator_content_blog';

    public function exportData($columns, $sessionKey = null)
    {
        return self::make()->get()->toArray();
    }
}

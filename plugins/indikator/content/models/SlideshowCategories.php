<?php namespace Indikator\Content\Models;

use Model;

class SlideshowCategories extends Model
{
    use \October\Rain\Database\Traits\Validation;

    protected $table = 'indikator_content_slideshow_categories';

    public $rules = [
        'name' => ['required', 'unique:indikator_content_slideshow_categories']
    ];
}

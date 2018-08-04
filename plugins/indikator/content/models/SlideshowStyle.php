<?php namespace Indikator\Content\Models;

use Model;

class SlideshowStyle extends Model
{
    use \October\Rain\Database\Traits\Validation;

    protected $table = 'indikator_content_slideshow_style';

    public $rules = [
        'title' => 'required'
    ];

    public function afterDelete()
    {
        Slideshow::where('style', $this->id)->update([
            'style' => 0
        ]);
    }
}

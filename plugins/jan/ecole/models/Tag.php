<?php namespace Jan\Ecole\Models;

use Model;

/**
 * Model
 */
class Tag extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var array Validation rules
     */
    public $rules = [
        'tag_titre' => 'required',
        'tag_short' => 'required',
        'slug' => 'required',
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'jan_ecole_tags';
}

<?php namespace Jan\Ecole\Models;

use Model;

/**
 * Model
 */
class InfoCenter extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'jan_ecole_infoscenter';


    /* Relations */

    public $belongsTo = [
        'user' => 'Backend\Models\User',
        'typeinfo' => 'Jan\Ecole\Models\TypeInfo',
        'structure' => 'Jan\Ecole\Models\Structure',
        'degre' => 'Jan\Ecole\Models\Degre'
    ];

    public $hasManyThrough = [
        'volees' => [
            'Jan\Ecole\Models\Volee',
            'through' => 'Jan\Ecole\Models\Degre'
        ],
    ];


    /* Médias */

    public $attachOne = [
        'banner' => 'System\Models\File'
    ];

    public $attachMany = [
        'galerie' => 'System\Models\File',
        'documents' => 'System\Models\File'
    ];

}

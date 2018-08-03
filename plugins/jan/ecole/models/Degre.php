<?php namespace Jan\Ecole\Models;

use Model;

/**
 * Model de classes d'écoles
 */
class Degre extends Model
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
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'jan_ecole_degres';

    /* Relations */

    public $belongsTo = [
        'structure' => 'Jan\Ecole\Models\Structure',
        'volee' => 'Jan\Ecole\Models\Volee',
        'annee' => 'Jan\Ecole\Models\Annee'
    ];

    public $belongsToMany = [
        'users' => [
            'Backend\Models\User',
            'table' => 'jan_ecole_degres_users',
            'order' => 'first_name'
        ]
    ];

}

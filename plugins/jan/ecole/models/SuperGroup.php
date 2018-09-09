<?php namespace Jan\Ecole\Models;

use Model;
use Backend\Models\UserGroup;
/**
 * Model
 */
class SuperGroup extends Model
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
    public $table = 'jan_ecole_supergroups';

    /* Relations */


    public $hasMany = [
         'etendue' => ['Jan\Ecole\Models\EnseignantEtendue', 'key' => 'supergroup_id'],
    ];


}

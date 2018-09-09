<?php namespace Jan\Ecole\Models;

use Model;

/**
 * Model
 */
class EnseignantEtendue extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SoftDelete;
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    protected $dates = ['deleted_at'];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'jan_ecole_users_etendues';


    /* Relations */

    public $belongsTo = [
         'structure' => ['Jan\Ecole\Models\Structure', 'key' => 'structure_id'],
         'supergroup' => ['Jan\Ecole\Models\SuperGroup', 'key' => 'supergroup_id'],
         'teacher' => ['Jan\Ecole\Models\Enseignant', 'key' => 'user_id', 'order' => ['first_name', 'last_name']]
    ];
}

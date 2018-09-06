<?php namespace Jan\Ecole\Models;

use Model;

/**
 * Model
 */
class Annee extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SoftDelete;
    
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
    public $table = 'jan_ecole_annees';

    /* Query Scopes */
    public function scopeActifs($query)
    {
        return $query->where('is_actif', 1);

    }

     /* Relations */

    public $hasMany = [
        'degres' => 'Jan\Ecole\Models\Degre'
    ];
}

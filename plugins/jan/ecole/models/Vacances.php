<?php namespace Jan\Ecole\Models;

use Model;

/**
 * Model
 */
class Vacances extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    /**
     * @var array Validation rules
     */
    public $rules = [
        'titre' => 'required',
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'jan_ecole_vacances';


    /* Relations */
    public $belongsTo = [
        'annee' => 'Jan\Ecole\Models\Annee',
        'structure' => 'Jan\Ecole\Models\Structure'
    ];    

    public $hasMany = [
        'vacancesdetail' => ['Jan\Ecole\Models\VacancesDetail', 'order' => 'debut']
    ];


     /* Scopes */

    public function scopeActifs($query)
    {
        return $query->where('is_frontend', 1);
    }

}

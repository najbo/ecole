<?php namespace Jan\Ecole\Models;

use Model;

/**
 * Model de classes d'écoles
 */
class Classe extends Model
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
    public $table = 'jan_ecole_classes';

    /* Relations */

    public $belongsTo = [
        'structure' => 'Jan\Ecole\Models\Structure',
        'volee' => 'Jan\Ecole\Models\Volee',
        'annee' => 'Jan\Ecole\Models\Annee'
    ];

    public $belongsToMany = [
        'users' => [
            'Backend\Models\User',
            'table' => 'jan_ecole_classes_users',
            'order' => 'first_name'
        ]
    ];

    public function getFullDegreAttribute () {

        return $this->annee->titre .' | ' .$this->degre .' | '. $this->volee->designation .' - ' . $this->volee->titre;

    }


}

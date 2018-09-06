<?php namespace Jan\Ecole\Models;

use Model;

/**
 * Model
 */
class VacancesDetail extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at', 'debut', 'fin'];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'jan_ecole_vacances_details';

    /* Relations */

    public $belongsTo = [
        'vacances' => 'Jan\Ecole\Models\Vacances'
    ]; 


    /* Scopes */

    public function scopeDetailActifs($query)
    {
        return $query->where('is_frontend', 1);
    }


    /* Accessors and Mutators */

    // Retoourne un champ pour indiquer l'état du détail des vacances pour mettre la bonne couleur sur l'attribut <td> du tableau des vacances
    public function getStatusAttribute () {

        /*
        'past' = élément passé
        'actual' = élément dans la plage de date actuelle
        'futur' = élément futur
        */
        $pastClass = 'text-muted';
        $actualClass = 'text-danger';
        $futurClass = '';

        $attribut = '';

        $debut = $this->debut;
        $fin = $this->fin;

        $maintenant = now();

        if ($debut <= $maintenant and $fin >= $maintenant) {
            $attribut = $actualClass;
        } elseif (date_format($debut,"d.m.Y") == date_format($maintenant,"d.m.Y") and $fin == null ) 
        {
            $attribut = $actualClass;
        } elseif ($debut < $maintenant and $fin == null) 
        {
            $attribut = $pastClass;
        } elseif ($fin < $maintenant) 
        {
            $attribut = $pastClass;
        } else {
            $attribut = $futurClass;
        }
        
        return $attribut;
    }


}

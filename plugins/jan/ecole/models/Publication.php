<?php namespace Jan\Ecole\Models;

use Model;
use BackendAuth;
/**
 * Model
 */
class Publication extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    /**
     * @var array Validation rules
     */
    public $rules = [
        'titre' => 'required',
        'date_event' => 'required',
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'jan_ecole_publications';


    /* Relations */

    public $belongsTo = [
        'user' => 'Backend\Models\User',
        'publicationtype' => 'Jan\Ecole\Models\PublicationType',
        'structure' => 'Jan\Ecole\Models\Structure',
        'classe' => 'Jan\Ecole\Models\Classe',
        'publicationetendue' => 'Jan\Ecole\Models\PublicationEtendue'
        #'classe2' => 'Jan\Ecole\Models\Classe'

    ];

    /*    public $hasManyThrough = [
            'volees' => [
                'Jan\Ecole\Models\Volee',
                'through' => 'Jan\Ecole\Models\Degre'
            ],
        ];*/


    /* Médias */

    public $attachOne = [
        'banner' => 'System\Models\File'
    ];

    public $attachMany = [
        'galerie' => 'System\Models\File',
        'documents' => 'System\Models\File'
    ];



    public function isActif($status){
        switch($status) {
                case 0:
                    return ' [A]';
                    break;
                default:
                   return '';
            }
    }


    public function getPublicationEtendueIdOptions($value, $formData) {
        $options = PublicationEtendue::lists('titre','id');
        #dump($options);
        #die();
        return $options;
    }


    public function getUserOptions()
    {
        $result = [];
        #$sql = Blog::where('status', 1)->orderBy('created_at', 'desc')->get()->all();
        $sql = Enseignant::orderBy('last_name', 'first_name')
            ->get()->all();
  
        foreach ($sql as $item) {

            $result[$item->id] = $item->first_name . ' ' . $item->last_name;
        }
        
        return $result;
    }

    public function getClasseOptions()
    {
        $result = [];
        #$sql = Blog::where('status', 1)->orderBy('created_at', 'desc')->get()->all();
        $sql = Classe::where('is_actif', 1)
            ->orWhere('id', '=', $this->classe_id)
            ->orderBy('degre', 'asc')->get();  // Retiré ->all() après le get
        foreach ($sql as $item) {

            $result[$item->id] = $item->annee->titre .' | ' .$item->degre .' | '. $item->volee->designation .' - ' . $item->volee->titre . ' ' .$this->isActif($item->is_actif);
        }
        // dump(BackendAuth::getUser()->first_name); // THIS WORKS !
        return $result;
    }

    public function getClasseActifAttribute () {
            return $this->classe->is_frontend;
    }

    public function getVoleeActifAttribute () {
            return $this->classe->volee->is_frontend;
    }

    public function getAnneeActifAttribute () {
            return $this->classe->annee->is_frontend;
    }

    /* Scopes */

    public function scopeActifs($query)
    {
        return $query->where('is_frontend', 1);
    }



}

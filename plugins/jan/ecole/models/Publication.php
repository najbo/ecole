<?php namespace Jan\Ecole\Models;

use Model;

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
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'jan_ecole_publications';

    public function getEtendueIdOptions($value, $formData) {
        $options = PublicationEtendue::lists('titre','id');
        #dump($options);
        #die();
        return $options;
}

    /* Relations */

    public $belongsTo = [
        'user' => 'Backend\Models\User',
        'publicationtype' => 'Jan\Ecole\Models\PublicationType',
        'structure' => 'Jan\Ecole\Models\Structure',
        'classe' => 'Jan\Ecole\Models\Classe'

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

}

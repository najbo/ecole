<?php namespace Jan\Ecole\Models;

use Model;
// use Backend\Models\User as EnseignantModel;
// use Backend\Controllers\Users as EnseignantsController;

/**
 * Enseignant Model
 */
class Enseignant extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'backend_users';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    public $rules = [
            'first_name' => 'required',
            'last_name' => 'required'
        ];


    public function getFullNameAttribute()
    {
        return trim($this->first_name . ' ' . $this->last_name);
    }

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [
        'attributions' => [
            'Jan\Ecole\Models\EnseignantEtendue',
            'key' => 'user_id'
             ],            
    ];

    public $belongsTo = [];

    public $belongsToMany = [
            'structures' => [
                'Jan\Ecole\Models\Structure',
                'table' => 'jan_ecole_users_etendues',
                'key' => 'user_id'
            ],
    ];

    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];


}
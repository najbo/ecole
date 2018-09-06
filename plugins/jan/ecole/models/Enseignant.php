<?php namespace Jan\Ecole\Models;

use Model;
// use Backend\Models\User as EnseignantModel;
// use Backend\Controllers\Users as EnseignantsController;

/**
 * Enseignant Model
 */
class Enseignant extends Model
{
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



    public function getFullNameAttribute()
    {
        return trim($this->first_name . ' ' . $this->last_name);
    }

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}

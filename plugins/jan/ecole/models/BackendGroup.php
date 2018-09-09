<?php namespace Jan\Ecole\Models;

use Model;
// use Backend\Models\UserGroup;

/**
 * Backend_users_groups Model
 */
class BackendGroup extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'backend_user_groups';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];


    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [
         'fonctions' => ['Jan\Ecole\Models\Fonction', 'table' => 'backend_users_groups', 'key' => 'user_group_id'],
    ];

    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}

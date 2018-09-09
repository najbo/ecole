<?php namespace Jan\Ecole\Models;

use Model;
//use Backend\Models\UserGroup;

/**
 * Fonction Model (backend_users_groups)
 */
class Fonction extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'backend_users_groups';

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
    public $hasMany = [];
    public $belongsTo = [
         'group' => [BackendGroup::class, 'table' => 'backend_user_groups', 'key' => 'user_group_id'],
         'teachers' => ['Jan\Ecole\Models\Enseignant', 'table' => 'backend_users', 'key' => 'user_id', 'order' => 'last_name']
         //'teachers' => [User::class, 'table' => 'backend_users', 'key' => 'user_id']
     ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}

<?php namespace Indikator\Content\Models;

use Model;
use Form;

class Author extends Model
{
    public $table = 'backend_users';

    protected static $nameList = null;

    public static function getNameList()
    {
        if (self::$nameList) {
            return self::$nameList;
        }
        else {
            self::$nameList = [0 => '&nbsp;'];
        }

        return self::$nameList += self::lists('login', 'id');
    }
}

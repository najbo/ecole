<?php namespace Jan\Ecole\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJanEcoleClassesUsers extends Migration
{
    public function up()
    {
        Schema::rename('jan_ecole_degres_users', 'jan_ecole_classes_users');
    }
    
    public function down()
    {
        Schema::rename('jan_ecole_classes_users', 'jan_ecole_degres_users');
    }
}

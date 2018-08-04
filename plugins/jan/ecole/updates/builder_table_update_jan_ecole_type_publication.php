<?php namespace Jan\Ecole\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJanEcoleTypePublication extends Migration
{
    public function up()
    {
        Schema::rename('jan_ecole_typeinfo', 'jan_ecole_types_publication');
    }
    
    public function down()
    {
        Schema::rename('jan_ecole_type_publication', 'jan_ecole_typeinfo');
    }
}
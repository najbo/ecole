<?php namespace Jan\Ecole\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJanEcoleDegresUsers3 extends Migration
{
    public function up()
    {
        Schema::table('jan_ecole_degres_users', function($table)
        {
            $table->dropPrimary(['degre_id','user_id']);
            $table->renameColumn('degre_id', 'classe_id');
            $table->primary(['classe_id','user_id']);
        });
    }
    
    public function down()
    {
        Schema::table('jan_ecole_degres_users', function($table)
        {
            $table->dropPrimary(['classe_id','user_id']);
            $table->renameColumn('classe_id', 'degre_id');
            $table->primary(['degre_id','user_id']);
        });
    }
}

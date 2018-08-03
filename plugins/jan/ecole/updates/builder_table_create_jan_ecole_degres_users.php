<?php namespace Jan\Ecole\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateJanEcoleDegresUsers extends Migration
{
    public function up()
    {
        Schema::create('jan_ecole_degres_users', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('degre_id');
            $table->integer('user_id');
            $table->boolean('archive')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->primary(['degre_id','user_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('jan_ecole_degres_users');
    }
}

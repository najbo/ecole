<?php namespace Jan\Ecole\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateJanEcoleDegresUsers extends Migration
{
    public function up()
    {
        Schema::create('jan_ecole_classes_users', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('classe_id');
            $table->integer('user_id');
            $table->boolean('is_actif')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->primary(['classe_id','user_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('jan_ecole_classes_users');
    }
}
<?php namespace Jan\Ecole\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateJanGestionclassesAnnees extends Migration
{
    public function up()
    {
        Schema::create('jan_ecole_annees', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();

            $table->string('titre');
            
            $table->dateTime('debut')->nullable();
            $table->dateTime('fin')->nullable();

            $table->boolean('is_actif')->nullable()->default(1);
            $table->boolean('is_frontend')->nullable()->default(1);
            
            $table->timestamp('deleted_at')->nullable();

        });
    }
    
    public function down()
    {
        Schema::dropIfExists('jan_ecole_annees');
    }
}
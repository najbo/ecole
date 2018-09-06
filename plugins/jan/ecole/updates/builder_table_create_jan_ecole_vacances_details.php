<?php namespace Jan\Ecole\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateJanEcoleVacancesDetails extends Migration
{
    public function up()
    {
        Schema::create('jan_ecole_vacances_details', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('vacances_id')->nullable()->unsigned();
            $table->string('titre');
            $table->text('description')->nullable();
            $table->dateTime('debut')->nullable();
            $table->dateTime('fin')->nullable();
            $table->string('duree')->nullable();
            $table->boolean('is_actif')->nullable()->default(1);
            $table->boolean('is_frontend')->nullable()->default(1);
            
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('jan_ecole_vacances_details');
    }
}
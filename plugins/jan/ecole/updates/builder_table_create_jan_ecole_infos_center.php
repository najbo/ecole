<?php namespace Jan\Ecole\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateJanEcoleInfosCenter extends Migration
{
    public function up()
    {
        Schema::create('jan_ecole_infoscenter', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('titre', 512);
            $table->text('accroche')->nullable();
            $table->text('corps')->nullable();
            $table->string('section', 10)->nullable();
            $table->boolean('highlight')->default(0);;
            $table->string('coordonnees')->nullable();
            $table->integer('user_id');
            $table->integer('degre_id');
            $table->integer('structure_id');
            $table->integer('typeinfo_id');
            $table->dateTime('date_event')->nullable();
            $table->dateTime('date_debut')->nullable();
            $table->dateTime('date_fin')->nullable();
            $table->boolean('actif')->default(1);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('jan_ecole_infoscenter');
    }
}
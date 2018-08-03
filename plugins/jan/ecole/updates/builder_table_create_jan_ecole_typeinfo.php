<?php namespace Jan\Ecole\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateJanEcoleTypeinfo extends Migration
{
    public function up()
    {
        Schema::create('jan_ecole_typeinfo', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('titre');
            $table->string('slug')->nullable();
            $table->string('abreviation', 10)->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->boolean('actif')->default(1);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('jan_ecole_typeinfo');
    }
}
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
            $table->text('titre')->nullable();
            $table->date('debut')->nullable();
            $table->integer('archive')->nullable()->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('jan_ecole_annees');
    }
}

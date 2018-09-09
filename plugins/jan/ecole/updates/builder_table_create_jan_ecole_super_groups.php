<?php namespace Jan\Ecole\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateJanEcoleSuperGroups extends Migration
{
    public function up()
    {
        Schema::create('jan_ecole_supergroups', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('titre');
            $table->text('description')->nullable();
            $table->integer('sort_order')->nullable()->unsigned();
            $table->boolean('is_frontend')->nullable();
            $table->boolean('is_showfonction')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('jan_ecole_supergroups');
    }
}
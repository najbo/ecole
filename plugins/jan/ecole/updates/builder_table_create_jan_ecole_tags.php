<?php namespace Jan\Ecole\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateJanEcoleTags extends Migration
{
    public function up()
    {
        Schema::create('jan_ecole_tags', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('tag_short', 10);
            $table->string('tag_titre');
            $table->string('color')->nullable();
            $table->string('slug')->nullable();
            $table->boolean('is_actif')->default(1);
            $table->boolean('is_frontend')->default(1);
            $table->timestamp('deleted_at')->nullable();
            
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('jan_ecole_tags');
    }
}
<?php namespace Jan\Ecole\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateJanEcoleUsersEtendues extends Migration
{
    public function up()
    {
        Schema::create('jan_ecole_users_etendues', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('user_id')->nullable()->unsigned();
            $table->integer('structure_id')->nullable()->unsigned();
            $table->integer('supergroup_id')->nullable()->unsigned();
            $table->string('fonction')->nullable();
            $table->integer('sort_orderby')->unsigned()->default(0);
            
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('jan_ecole_users_etendues');
    }
}
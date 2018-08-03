<?php namespace Jan\Ecole\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateEnseignantsTable extends Migration
{
    public function up()
    {
        Schema::create('jan_ecole_enseignants', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jan_ecole_enseignants');
    }
}

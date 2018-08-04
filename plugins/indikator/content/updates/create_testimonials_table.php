<?php namespace Indikator\Content\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class CreateTestimonialsTable extends Migration
{
    public function up()
    {
        Schema::create('indikator_content_testimonials', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 100);
            $table->string('position', 100)->nullable();
            $table->string('company', 100)->nullable();
            $table->string('webpage', 100)->nullable();
            $table->text('content')->nullable();
            $table->string('image', 100);
            $table->string('status', 1)->default(1);
            $table->string('sort_order', 3)->default(1);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('indikator_content_testimonials');
    }
}

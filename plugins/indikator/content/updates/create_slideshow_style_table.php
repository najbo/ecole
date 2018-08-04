<?php namespace Indikator\Content\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class CreateSlideshowStyleTable extends Migration
{
    public function up()
    {
        Schema::create('indikator_content_slideshow_style', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title', 100);
            $table->string('common', 100)->nullable();
            $table->string('title_color', 7)->nullable();
            $table->string('subtitle_color', 7)->nullable();
            $table->string('text_color', 7)->nullable();
            $table->string('bg_color', 7)->nullable();
            $table->string('btn_bg_color', 7)->nullable();
            $table->string('btn_text_color', 7)->nullable();
            $table->string('top', 6)->nullable();
            $table->string('right', 6)->nullable();
            $table->string('botton', 6)->nullable();
            $table->string('left', 6)->nullable();
            $table->string('width', 6)->nullable();
            $table->string('height', 6)->nullable();
            $table->text('unique')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('indikator_content_slideshow_style');
    }
}

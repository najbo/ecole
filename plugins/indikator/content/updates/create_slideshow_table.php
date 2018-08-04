<?php namespace Indikator\Content\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class CreateSlideshowTable extends Migration
{
    public function up()
    {
        Schema::create('indikator_content_slideshow', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title', 100);
            $table->string('subtitle', 100);
            $table->string('slug', 100);
            $table->string('type', 1)->default(0);
            $table->string('type_page', 100)->nullable();
            $table->string('type_blog', 100)->nullable();
            $table->string('type_news', 100)->nullable();
            $table->string('type_portfolio', 100)->nullable();
            $table->string('type_external', 100)->nullable();
            $table->string('type_rainlab_blog', 100)->nullable();
            $table->text('content')->nullable();
            $table->string('image', 100);
            $table->string('status', 1)->default(1);
            $table->string('sort_order', 3)->default(1);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('indikator_content_slideshow');
    }
}

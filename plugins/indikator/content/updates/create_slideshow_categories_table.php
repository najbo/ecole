<?php namespace Indikator\Content\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class CreateSlideshowCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('indikator_content_slideshow_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 100);
            $table->text('description')->nullable();
            $table->timestamps();
        });

        Schema::table('indikator_content_slideshow', function($table)
        {
            $table->string('category', 4)->default(0);
        });
    }

    public function down()
    {
        Schema::dropIfExists('indikator_content_slideshow_categories');

        Schema::table('indikator_content_slideshow', function($table)
        {
            $table->dropColumn('category');
        });
    }
}

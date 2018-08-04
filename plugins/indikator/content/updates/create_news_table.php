<?php namespace Indikator\Content\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class CreateNewsTable extends Migration
{
    public function up()
    {
        Schema::create('indikator_content_news', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title', 100);
            $table->string('slug', 100);
            $table->text('summary')->nullable();
            $table->longText('content')->nullable();
            $table->text('images');
            $table->text('files');
            $table->text('related_blog');
            $table->text('related_news');
            $table->text('related_portfolio');
            $table->string('meta_title', 100)->nullable();
            $table->string('meta_keywords', 100)->nullable();
            $table->string('meta_desc', 200)->nullable();
            $table->string('image', 200)->nullable();
            $table->timestamp('published_at')->nullable();
            $table->string('status', 1)->default(1);
            $table->string('stat_view', 8)->default(0);
            $table->timestamp('stat_date')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('indikator_content_news');
    }
}

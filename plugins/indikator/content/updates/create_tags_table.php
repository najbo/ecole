<?php namespace Indikator\Content\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class CreateTagsTable extends Migration
{
    public function up()
    {
        Schema::create('indikator_content_tags', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 100);
            $table->string('slug', 100);
            $table->text('description')->nullable();
            $table->string('meta_title', 100)->nullable();
            $table->string('meta_keywords', 100)->nullable();
            $table->string('meta_desc', 200)->nullable();
            $table->string('image', 200)->nullable();
            $table->string('stat_view', 8)->default(0);
            $table->timestamp('stat_date')->nullable();
            $table->timestamps();
        });

        Schema::create('indikator_content_tags_blog', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('blog_id')->unsigned();
            $table->integer('tags_id')->unsigned();
            $table->primary(['blog_id', 'tags_id'], 'content_tags_blog');
        });

        Schema::create('indikator_content_tags_news', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('news_id')->unsigned();
            $table->integer('tags_id')->unsigned();
            $table->primary(['news_id', 'tags_id'], 'content_tags_news');
        });

        Schema::create('indikator_content_tags_portfolio', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('portfolio_id')->unsigned();
            $table->integer('tags_id')->unsigned();
            $table->primary(['portfolio_id', 'tags_id'], 'content_tags_portfolio');
        });
    }

    public function down()
    {
        Schema::dropIfExists('indikator_content_tags');
        Schema::dropIfExists('indikator_content_tags_blog');
        Schema::dropIfExists('indikator_content_tags_news');
        Schema::dropIfExists('indikator_content_tags_portfolio');
    }
}

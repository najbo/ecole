<?php namespace Indikator\Content\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class AddFieldsToPortfolioTable extends Migration
{
    public function up()
    {
        Schema::table('indikator_content_portfolio', function($table)
        {
            $table->string('sort_order', 3);
        });
        Schema::table('indikator_content_portfolio', function($table)
        {
            $table->integer('sort_order')->change();
        });
        Schema::table('indikator_content_blog_categories', function($table)
        {
            $table->integer('sort_order')->change();
        });
        Schema::table('indikator_content_news_categories', function($table)
        {
            $table->integer('sort_order')->change();
        });
        Schema::table('indikator_content_portfolio_categories', function($table)
        {
            $table->integer('sort_order')->change();
        });
        Schema::table('indikator_content_slideshow', function($table)
        {
            $table->integer('sort_order')->change();
        });
        Schema::table('indikator_content_testimonials', function($table)
        {
            $table->integer('sort_order')->change();
        });
    }

    public function down()
    {
        Schema::table('indikator_content_portfolio', function($table)
        {
            $table->dropColumn('sort_order');
        });
        Schema::table('indikator_content_blog_categories', function($table)
        {
            $table->string('sort_order')->change();
        });
        Schema::table('indikator_content_news_categories', function($table)
        {
            $table->string('sort_order')->change();
        });
        Schema::table('indikator_content_portfolio_categories', function($table)
        {
            $table->string('sort_order')->change();
        });
        Schema::table('indikator_content_slideshow', function($table)
        {
            $table->string('sort_order')->change();
        });
        Schema::table('indikator_content_testimonials', function($table)
        {
            $table->string('sort_order')->change();
        });
    }
}

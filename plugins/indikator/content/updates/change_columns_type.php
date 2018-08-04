<?php namespace Indikator\Content\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class ChangeColumnsType extends Migration
{
    public function up()
    {
        Schema::table('indikator_content_blog', function($table)
        {
            $table->integer('stat_view')->change();
        });

        Schema::table('indikator_content_blog_categories', function($table)
        {
            $table->integer('stat_view')->change();
        });

        Schema::table('indikator_content_news', function($table)
        {
            $table->integer('stat_view')->change();
        });

        Schema::table('indikator_content_news_categories', function($table)
        {
            $table->integer('stat_view')->change();
        });

        Schema::table('indikator_content_portfolio', function($table)
        {
            $table->integer('stat_view')->change();
        });

        Schema::table('indikator_content_portfolio_categories', function($table)
        {
            $table->integer('stat_view')->change();
        });
    }

    public function down()
    {
        Schema::table('indikator_content_blog', function($table)
        {
            $table->string('stat_view')->change();
        });

        Schema::table('indikator_content_blog_categories', function($table)
        {
            $table->string('stat_view')->change();
        });

        Schema::table('indikator_content_news', function($table)
        {
            $table->string('stat_view')->change();
        });

        Schema::table('indikator_content_news_categories', function($table)
        {
            $table->string('stat_view')->change();
        });

        Schema::table('indikator_content_portfolio', function($table)
        {
            $table->string('stat_view')->change();
        });

        Schema::table('indikator_content_portfolio_categories', function($table)
        {
            $table->string('stat_view')->change();
        });
    }
}

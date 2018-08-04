<?php namespace Indikator\Content\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class AddFeaturedFieldToTables extends Migration
{
    public function up()
    {
        Schema::table('indikator_content_blog', function($table)
        {
            $table->string('featured', 1)->default(2);
        });
        Schema::table('indikator_content_blog_categories', function($table)
        {
            $table->string('featured', 1)->default(2);
        });
        Schema::table('indikator_content_news', function($table)
        {
            $table->string('featured', 1)->default(2);
        });
        Schema::table('indikator_content_news_categories', function($table)
        {
            $table->string('featured', 1)->default(2);
        });
        Schema::table('indikator_content_portfolio', function($table)
        {
            $table->string('featured', 1)->default(2);
        });
        Schema::table('indikator_content_portfolio_categories', function($table)
        {
            $table->string('featured', 1)->default(2);
        });
    }

    public function down()
    {
        Schema::table('indikator_content_blog', function($table)
        {
            $table->dropColumn('featured');
        });
        Schema::table('indikator_content_blog_categories', function($table)
        {
            $table->dropColumn('featured');
        });
        Schema::table('indikator_content_news', function($table)
        {
            $table->dropColumn('featured');
        });
        Schema::table('indikator_content_news_categories', function($table)
        {
            $table->dropColumn('featured');
        });
        Schema::table('indikator_content_portfolio', function($table)
        {
            $table->dropColumn('featured');
        });
        Schema::table('indikator_content_portfolio_categories', function($table)
        {
            $table->dropColumn('featured');
        });
    }
}

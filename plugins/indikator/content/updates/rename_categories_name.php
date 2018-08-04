<?php namespace Indikator\Content\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class RenameCategoriesName extends Migration
{
    public function up()
    {
        Schema::table('indikator_content_blog_relations', function($table)
        {
            $table->renameColumn('category_id', 'blog_category_id');
        });

        Schema::table('indikator_content_news_relations', function($table)
        {
            $table->renameColumn('category_id', 'news_category_id');
        });

        Schema::table('indikator_content_portfolio_relations', function($table)
        {
            $table->renameColumn('category_id', 'portfolio_category_id');
        });
    }

    public function down()
    {
        // Nothing
    }
}

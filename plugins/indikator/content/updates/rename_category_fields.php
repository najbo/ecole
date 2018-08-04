<?php namespace Indikator\Content\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class RenameCategoryFields extends Migration
{
    public function up()
    {
        Schema::table('indikator_content_blog_relations', function($table)
        {
            $table->renameColumn('blog_category_id', 'blog_categories_id');
        });

        Schema::table('indikator_content_news_relations', function($table)
        {
            $table->renameColumn('news_category_id', 'news_categories_id');
        });

        Schema::table('indikator_content_portfolio_relations', function($table)
        {
            $table->renameColumn('portfolio_category_id', 'portfolio_categories_id');
        });
    }

    public function down()
    {
        // Nothing
    }
}

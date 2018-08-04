<?php namespace Indikator\Content\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class CreatePortfolioCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('indikator_content_portfolio_categories', function($table)
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
            $table->string('status', 1)->default(1);
            $table->string('sort_order', 3)->default(1);
            $table->string('stat_view', 8)->default(0);
            $table->timestamp('stat_date')->nullable();
            $table->timestamps();
        });

        Schema::create('indikator_content_portfolio_relations', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('portfolio_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->primary(['portfolio_id', 'category_id'], 'content_portfolio_relations');
        });
    }

    public function down()
    {
        Schema::dropIfExists('indikator_content_portfolio_categories');
        Schema::dropIfExists('indikator_content_portfolio_relations');
    }
}

<?php namespace Indikator\Content\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class FixSortingIssue extends Migration
{
    public function up()
    {
        Schema::table('indikator_content_portfolio', function($table)
        {
            $table->integer('sort_order')->default(1)->change();
        });
    }

    public function down()
    {
        // ...
    }
}

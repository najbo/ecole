<?php namespace Indikator\Content\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class AddFieldsToSlideshowTable extends Migration
{
    public function up()
    {
        Schema::table('indikator_content_slideshow', function($table)
        {
            $table->string('style', 4)->default(0);
            $table->string('button', 100)->nullable();
        });
    }

    public function down()
    {
        Schema::table('indikator_content_slideshow', function($table)
        {
            $table->dropColumn('style');
            $table->dropColumn('button');
        });
    }
}

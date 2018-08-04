<?php namespace Indikator\Content\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class AddFieldsToTestimonialsTable extends Migration
{
    public function up()
    {
        Schema::table('indikator_content_testimonials', function($table)
        {
            $table->string('title', 200)->nullable();
            $table->string('rating', 1)->default(5);
            $table->timestamp('published_at')->useCurrent();
            $table->string('featured', 1)->default(0);
        });
    }

    public function down()
    {
        Schema::table('indikator_content_testimonials', function($table)
        {
            $table->dropColumn('title');
            $table->dropColumn('rating');
            $table->dropColumn('published_at');
            $table->dropColumn('featured');
        });
    }
}

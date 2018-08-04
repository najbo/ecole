<?php namespace Indikator\Content\Updates;

use October\Rain\Database\Updates\Migration;
use DbDongle;

class UpdateTimestampsNullable extends Migration
{
    public function up()
    {
        DbDongle::disableStrictMode();

        DbDongle::convertTimestamps('indikator_content_blog');
        DbDongle::convertTimestamps('indikator_content_blog_categories');
        DbDongle::convertTimestamps('indikator_content_news');
        DbDongle::convertTimestamps('indikator_content_news_categories');
        DbDongle::convertTimestamps('indikator_content_portfolio');
        DbDongle::convertTimestamps('indikator_content_portfolio_categories');
        DbDongle::convertTimestamps('indikator_content_slideshow');
        DbDongle::convertTimestamps('indikator_content_testimonials');
        DbDongle::convertTimestamps('indikator_content_tags');
    }

    public function down()
    {
        // ...
    }
}

<?php

namespace Jan\Ecole\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class AddNewFields extends Migration
{
    public function up()
    {
        Schema::table('backend_users', function (Blueprint $table) {
            $table->text('description')->nullable();
            $table->string('slug')->nullable()->unique();
            $table->text('adresse')->nullable();
            $table->string('telephone_1')->nullable();
            $table->string('telephone_2')->nullable();
            $table->boolean('tel_non_public')->nullable()->default(1);
        });
    }

    public function down()
    {
         Schema::table('backend_users', function (Blueprint $table) {
            $table->dropColumn([
                'description',
                'slug',
                'adresse',
                'telephone_1',
                'telephone_2',
                'tel_non_public'
            ]);
        });
            
    }
}
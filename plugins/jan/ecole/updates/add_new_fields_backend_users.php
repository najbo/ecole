<?php

namespace Jan\Ecole\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class AddNewFieldsBackendUsers extends Migration
{
    public function up()
    {
        Schema::table('backend_users', function (Blueprint $table) {
            $table->string('fonction')->nullable();
            $table->text('description')->nullable();
            $table->string('slug')->nullable()->unique();
            $table->text('adresse')->nullable();
            $table->string('telephone_1')->nullable();
            $table->string('telephone_2')->nullable();
            $table->boolean('is_telnonpublic')->nullable()->default(0);
            $table->boolean('is_avatarnonpublic')->nullable()->default(0);
        });
    }

    public function down()
    {
         Schema::table('backend_users', function (Blueprint $table) {
            $table->dropColumn([
                'fonction',
                'description',
                'slug',
                'adresse',
                'telephone_1',
                'telephone_2',
                'is_telnonpublic',
                'is_avatarnonpublic'
            ]);
        });
            
    }
}
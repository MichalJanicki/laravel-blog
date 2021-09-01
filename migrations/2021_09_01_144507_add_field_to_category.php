<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AddFieldToCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('binshops_blog_categories', function (Blueprint $table) {
            $table->string('page_title', 65);
            $table->string('page_description', 160);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('binshops_blog_categories', function (Blueprint $table) {
            $table->dropColumn(['page_title', 'page_description']);
        });
    }
}
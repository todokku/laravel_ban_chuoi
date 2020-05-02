<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('categories_name')->unique();
            $table->string('categories_slug')->index();
            $table->char('categories_icon')->nullable();
            $table->string('categories_avatar')->nullable();
            $table->tinyInteger('categories_active')->default(1)->index();
            $table->integer('categories_total_product')->default(0);
            $table->string('categories_title_seo')->nullable();
            $table->string('categories_description_seo')->nullable();
            $table->string('categories_keywords_seo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}

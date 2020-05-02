<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_name')->nullable();
            $table->string('product_slug')->index();
            $table->integer('product_category_id')->index()->default(0);
            $table->unsignedInteger('product_price')->unsigned();
            $table->unsignedInteger('product_sale')->unsigned();
            $table->integer('product_admin_id')->default(0)->index();
            $table->tinyInteger('product_active')->default(1)->index();
            $table->tinyInteger('product_hot')->default(0);
            $table->tinyInteger('product_pay')->default(0);
            $table->tinyInteger('product_number')->default(0);
            $table->integer('product_view')->default(0);
            $table->string('product_description')->nullable();
            $table->text('product_content')->nullable();
            $table->string('product_avatar')->nullable();
            $table->string('product_description_seo')->nullable();
            $table->string('product_keywords_seo')->nullable();
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
        Schema::dropIfExists('products');
    }
}

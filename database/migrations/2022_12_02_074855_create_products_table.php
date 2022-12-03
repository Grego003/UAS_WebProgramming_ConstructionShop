<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('product_name', 50)->nullable();
            $table->string('code')->nullable();
            $table->string('subcategory_id')->nullable();
            $table->integer('length')->nullable();
            $table->text('link_tokopedia')->nullable();
            $table->text('link_shoope')->nullable();
            $table->text('img')->nullable();
            $table->integer('category_id');
            $table->integer('stock')->nullable();
            $table->text('description')->nullable();
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

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Ramsey\Uuid\Type\Integer;

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
            $table->string('product_code', 5);
            $table->string('categories_id');
            $table->string('product_name', 50);
            $table->smallInteger('length')->default(6);
            $table->string('link_tokopedia', 350)->nullable();
            $table->string('link_shopee', 350)->nullable();
            $table->string('src_img', 150)->nullable();
            $table->timestamps();
            $table->primary(['product_code', 'categories_id']);
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

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
            $table->increments('id');
            $table->string('name_ru');
            $table->string('name_en');
            $table->text('desc_1_ru');
            $table->text('desc_1_en');
            $table->text('desc_2_ru');
            $table->text('desc_2_en');
            $table->string('main_image')->nullable();
            $table->string('wallpaper')->nullable();
            $table->string('tema_1_ru')->nullable();
            $table->string('tema_1_en')->nullable();
            $table->text('tema_desc_1_ru')->nullable();
            $table->text('tema_desc_1_en')->nullable();
            $table->string('tema_1_image')->nullable();
            $table->string('tema_2_ru')->nullable();
            $table->string('tema_2_en')->nullable();
            $table->text('tema_desc_2_ru')->nullable();
            $table->text('tema_desc_2_en')->nullable();
            $table->string('tema_2_image')->nullable();

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

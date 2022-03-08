<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('name',255);
            $table->string('model',255);
            $table->integer('price')->unsigned();
            $table->bigInteger('category_id')->unsigned();
            $table->smallInteger('identifier')->nullable();
            $table->string('identifier_name')->unique()->nullable();
            $table->smallInteger('active');
            $table->bigInteger('file_id')->unsigned()->nullable();
            $table->timestamps();

        });

        Schema::table('products', function (Blueprint $table) {

            $table->foreign('category_id')->references('id')
                ->on('product_categories')->onDelete('restrict');

            $table->foreign('identifier')->references('id')
                ->on('identifier_types')->onDelete('restrict');

            $table->foreign('file_id')->references('id')
                ->on('files')->onDelete('cascade');
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
};

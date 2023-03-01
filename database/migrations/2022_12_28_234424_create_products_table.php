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
            $table->string('product_name');

            // متوفر = 1
            // غير متوفر = 2
            $table->string('status', 50)->default('متوفر'); //حالة المنتج ا
            $table->integer('value_status')->default(1); // لكل حالة متنج رقم معين من أجل الاستعلام لاحقا أسهل بالشغل الي

						// عدد المشرتين
            $table->longText('countCus')->nullable();

            $table->foreignId('section_id')->references('id')->on('sections')->cascadeOnDelete();
            $table->longText('description')->nullable();

            $table->string('product_new_price');
            $table->string('country_currency');
            $table->string('product_old_price')->nullable();

            $table->string('img_path', 999);
            $table->string('img_alt_text', 999)->nullable();

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
};

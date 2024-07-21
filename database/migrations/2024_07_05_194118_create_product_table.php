<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('product')->nullable();
            $table->string('image_platform')->nullable();
            $table->text('desc_product')->nullable();
            $table->decimal('price', 10, 2)->nullable();
            $table->string('product_img')->nullable();
            $table->text('product_param')->nullable();
            $table->text('info_shop')->nullable();
            $table->text('info_returns')->nullable();
            $table->text('question_product')->nullable();
            $table->string('type_service')->nullable();
            $table->string('category')->nullable();
            $table->string('path_img_product')->nullable();
            $table->text('param_calc')->nullable();
            $table->string('filter_price')->nullable();
            $table->string('filter_platform')->nullable();
            $table->string('filter_service')->nullable();
            $table->text('rating')->nullable();
            $table->text('name')->nullable();
            $table->text('comment')->nullable();
            $table->string('average_rating')->nullable();
            $table->timestamps();
        });
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};

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
         Schema::create('messages', function (Blueprint $table) {
             $table->id();
             $table->unsignedBigInteger('user_id');
             $table->unsignedBigInteger('chat_id');
             $table->text('message');
             $table->timestamps();
     
             $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
     
             if (Schema::hasTable('chat')) {
                 $table->foreign('chat_id')->references('id')->on('chat')->onDelete('cascade');
             }
         });
     }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};

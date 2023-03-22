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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); 
            $table->text('name');
            $table->text('designation');
            $table->text('description');
            $table->text('email')->unique();
            $table->text('phone')->unique();
            $table->text('image');
            $table->text('facebook')->nullable();
            $table->text('twitter')->nullable();
            $table->text('instagram')->nullable();
            $table->text('linkedin')->nullable();
            $table->integer('status')->default(1)->comment('Active=1, Inactive=0');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('teams');
    }
};

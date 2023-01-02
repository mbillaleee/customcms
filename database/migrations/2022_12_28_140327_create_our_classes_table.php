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
        Schema::create('our_classes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('teacher_id');
            $table->string('title');
            $table->string('slug')->index('slug');
            $table->longText('content');
            $table->string('image')->nullable();
            $table->date('start_date');
            $table->string('class_size')->nullable();
            $table->string('age_range');
            $table->string('class_duration');
            $table->string('transport')->nullable();
            $table->string('morning_food')->nullable();
            $table->string('class_starff')->nullable();
            $table->date('class_date');
            $table->integer('status')->default(1)->comment('Active=1, Inactive=0');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('teacher_id')->references('id')->on('teachers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('our_classes');
    }
};

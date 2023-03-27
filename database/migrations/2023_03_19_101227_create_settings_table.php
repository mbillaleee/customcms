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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->text('domain')->nullable();
            $table->text('favicon')->nullable();
            $table->text('logo')->nullable();
            $table->text('address')->nullable();
            $table->text('title')->nullable();
            $table->text('mobile')->nullable();
            $table->text('email')->nullable();
            $table->text('facebook_url')->nullable();
            $table->text('twitter_url')->nullable();
            $table->text('youtube_url')->nullable();
            $table->text('copy_right')->nullable();
            $table->text('mission')->nullable();
            $table->text('vission')->nullable();
            $table->text('values')->nullable();
            $table->text('donation')->nullable();
            $table->text('sponsor_child')->nullable();
            $table->integer('blog_show')->default(0)->comment('Hide=0, Grid=1, List=2');
            $table->integer('status')->default(1)->comment('Active=1, Inactive=0');
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
        Schema::dropIfExists('settings');
    }
};

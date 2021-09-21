<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFollowingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('followings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('follower_profile_id');
            $table->foreign('follower_profile_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('followed_profile_id');
            $table->foreign('followed_profile_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('followings');
    }
}

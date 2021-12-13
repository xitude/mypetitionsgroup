<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petitions', function (Blueprint $table) {
            $table->id();
            $table->string('uuid');
            $table->string('title');
            $table->string('slug');
            $table->string('description')->nullable();
            $table->bigInteger('creator_id');
            $table->timestamp('ends_at')->nullable();
            $table->timestamps();
        });

        Schema::create('petition_user_votes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->bigInteger('petition_id');
            $table->timestamps();
        });

        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('uuid');
            $table->morphs('assignable');
            $table->bigInteger('user_id');
            $table->longText('comment');
            $table->timestamps();
        });

        Schema::create('impressions', function (Blueprint $table) {
            $table->id();
            $table->morphs('assignable');
            $table->bigInteger('user_id')->nullable();
            $table->string('ip_address')->nullable();
            $table->mediumText('user_agent')->nullable();
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
        Schema::dropIfExists('petitions');
        Schema::dropIfExists('petition_user_votes');
        Schema::dropIfExists('comments');
        Schema::dropIfExists('impressions');
    }
}

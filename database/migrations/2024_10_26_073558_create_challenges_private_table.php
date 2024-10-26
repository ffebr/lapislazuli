<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChallengesPrivateTable extends Migration
{
    public function up()
    {
        Schema::create('challenges_private', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->enum('type', ['Личный']);
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->boolean('is_over')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('challenges_private');
    }
}


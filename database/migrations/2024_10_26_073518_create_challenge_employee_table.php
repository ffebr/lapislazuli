<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChallengeEmployeeTable extends Migration
{
    public function up()
    {
        Schema::create('challenge_employee', function (Blueprint $table) {
            $table->id();
            $table->foreignId('challenge_id')->constrained('challenges')->onDelete('cascade');
            $table->foreignId('employee_id')->constrained('employees')->onDelete('cascade');
            $table->date('participation_date')->nullable(); 
        });
    }

    public function down()
    {
        Schema::dropIfExists('challenge_employee');
    }
}

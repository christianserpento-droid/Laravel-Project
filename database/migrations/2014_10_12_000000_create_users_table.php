<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
{
    Schema::create('users', function (Blueprint $table) {
        $table->id();
        $table->string('student_id');
        $table->string('name');
        $table->string('email')->unique(); // Add this
        $table->string('password'); // Add this
        $table->integer('age');
        $table->integer('average');
        $table->string('department');
        $table->string('program');
        $table->timestamps(); // Also good to add this
    });
}

public function down()
{
    Schema::dropIfExists('users'); // Fix typo: was 'user'
}
}
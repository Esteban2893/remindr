<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{

    public function up()
    {
        Schema::create('users', function (Blueprint $table) {

            $table->increments('id');
            $table->string('id_number');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');

            // 1. ADMIN 2. TEACHER 3. STUDENT
            $table->tinyInteger('user_type');
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}

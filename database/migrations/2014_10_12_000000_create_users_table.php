<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            //0=admin
            //1=student
            //2=docor
            $table->increments('id');
            $table->string('fname');
            $table->string('lname');
            $table->date('birth_date');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('user_type');
            $table->integer('level')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}

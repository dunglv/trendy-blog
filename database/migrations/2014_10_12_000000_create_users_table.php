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
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('phone')->nullable();
            $table->string('fullname')->nullable();
            $table->string('website')->nullable();
            $table->string('address')->nullable();
            $table->string('avatar')->nullable();
            $table->string('provider')->nullable(); // Type of register via social
            $table->integer('vip')->default(0);
            $table->datetime('dateofbirth')->nullable();
            $table->datetime('dateofjoin')->nullable();
            $table->text('profile')->nullable();
            $table->integer('gender')->default(0); //0:male - 1:female
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
        Schema::drop('users');
    }
}

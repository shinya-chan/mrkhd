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
            $table->string('name');
            $table->string('residence')->default('Islamic Republic of Iran');
            $table->integer('age')->default(16);
            $table->string('address')->default('Iran, Isfahan');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('number')->default('+98 (910) 325 8930');
            $table->string('job')->default("Web Developer");
            $table->string('instagram')->default("shinya_.chan");
            $table->string('telegram')->default("shinya_chan");
            $table->string('github')->default("alastor81");
            $table->string('twitter')->default("samashinya");
            $table->string('custom_link')->default("google");
            $table->string('custom_link_address')->default("google.com");
            $table->longText('about');
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

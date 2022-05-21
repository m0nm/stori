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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id('id');
            $table->string('name')->nullable();
            $table->string('avatar')->nullable();
            $table->string('job')->nullable();
            $table->string('location')->nullable();
            $table->mediumText('bio')->nullable();
            $table->timestamps();




            $table->string('birthday')->nullable();
            $table->boolean('birthday_visible')->default('0');

            $table->string('email');
            $table->foreign('email')->references('email')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->boolean('email_visible')->default('0');


            $table->foreignId('user_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
};
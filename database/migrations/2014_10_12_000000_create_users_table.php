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
            $table->string('name');
            $table->string('email')->unique();
            $table->string('slug')->nullable();
            $table->string('role')->nullable();
            $table->string('mobile')->nullable();
            $table->string('status')->nullable();
            $table->string('dp')->default('dp.png');
            $table->string('cover')->default('cover.png');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('country')->nullable();
            $table->string('address')->nullable();
            $table->string('primary_website')->nullable();
            $table->string('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('interested_in')->nullable();
            $table->string('language')->nullable();
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

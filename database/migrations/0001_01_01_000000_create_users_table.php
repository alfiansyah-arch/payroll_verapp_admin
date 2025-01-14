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
            $table->string('user_id');
            $table->string('username')->unique();;
            $table->string('email')->unique();
            $table->string('join_date')->unique();
            $table->string('role_name')->nullable();
            $table->string('avatar')->nullable();
            $table->string('department')->nullable();
            $table->string('position')->nullable();
            $table->string('status')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('verif_code')->nullable();
            $table->string('reset_token')->nullable();
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

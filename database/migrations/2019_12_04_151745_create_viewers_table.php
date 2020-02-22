<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViewersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viewers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('zone')->nullable();
            $table->string('u_name')->nullable();
            $table->string('v_name')->nullable();
            $table->string('email')->unique();
            $table->string('code')->nullable();
            $table->string('url')->nullable();
            $table->string('t_earn')->nullable();
            $table->string('l_earn')->nullable();
            $table->string('c_earn')->nullable();
            $table->string('to_earn')->nullable()->default(0);
            $table->string('status')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
        Schema::dropIfExists('viewers');
    }
}

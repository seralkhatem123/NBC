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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->string('firstname', 255)->nullable();
            $table->string('lastname', 255)->nullable();
            $table->string('town', 255)->nullable();
            $table->string('country', 255)->nullable();
            $table->string('fullname', 255)->nullable();
            $table->string('phone', 255)->nullable();
            $table->string('student_id', 255)->nullable();
            $table->string('category', 255)->nullable();
            $table->string('admin_id', 255)->nullable();
            $table->string('admin_email', 255)->nullable();
            $table->string('fee', 255)->nullable();
            $table->string('payment_request_id', 255)->nullable();
            $table->string('validity', 255)->nullable();
            $table->string('user_id', 255)->nullable();
            $table->string('avatar', 255)->default('noimage.jpg');
            $table->string('middlename', 255)->nullable();
            $table->string('title', 255)->nullable();
            $table->string('password2', 255)->nullable();
            $table->string('type', 255)->nullable();
            $table->string('address_type', 255)->nullable();
            $table->string('house', 255)->nullable();
            $table->string('street', 255)->nullable();
            $table->string('ZIPcode', 255)->nullable();
            $table->string('deliveryaddress', 255)->nullable();
            $table->string('invoiceaddress', 255)->nullable();
            $table->string('transscriptaddress', 255)->nullable();
            $table->string('gender', 255)->nullable();
            $table->string('scholarship', 255)->default(0);
            $table->string('sendpending', 255)->default(0);
            $table->string('is_admin', 255)->default(0);
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

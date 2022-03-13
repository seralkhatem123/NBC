<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseactivitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courseactivites', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('coursetitle',255)->nullable();
            $table->string('description',255)->nullable();
            $table->string('numberhourse',255)->nullable();
            $table->timestamp('coursestartdate')->nullable();
            $table->string('courselocation',255)->nullable();
            $table->string('user_id',255)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courseactivites');
    }
}

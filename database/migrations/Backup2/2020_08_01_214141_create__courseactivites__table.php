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
            $table->string('coursetitle',255);
            $table->string('description',255);
            $table->string('numberhourse',255);
            $table->timestamp('coursestartdate');
            $table->string('courselocation',255);
            $table->string('user_id',255);
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

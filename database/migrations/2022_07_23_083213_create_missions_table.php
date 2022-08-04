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
        Schema::create('missions', function (Blueprint $table) {
            $table->id();
            $table->string('title_one');
            $table->string('img');
            $table->string('description_one');

            $table->string('title_tow');
            $table->string('description_tow');

            $table->string('title_three');
            $table->string('description_three');


            $table->string('title_four');
            $table->string('description_four');


            $table->tinyInteger('Priority');
            $table->tinyInteger('status')->comment('1=active, 2 =de-active');

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
        Schema::dropIfExists('missions');
    }
};

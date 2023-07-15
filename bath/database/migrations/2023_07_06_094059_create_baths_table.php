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
        Schema::create('baths', function (Blueprint $table) {
            $table->id();
            $table->string('bath_name');
            $table->string('prefecture_id');
            $table->string('address')->unique();
            // $table->unsignedBigInteger('user_id')->constrained();
            $table->timestamps();

            // $table->foreign('user_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('baths');
    }
};

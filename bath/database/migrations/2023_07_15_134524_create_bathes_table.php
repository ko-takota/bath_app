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
        Schema::create('bathes', function (Blueprint $table) {
            $table->id();
            $table->string('bath_name');
            $table->text('information');
            $table->integer('price');
            $table->string('address')->unique();
            $table->unsignedBigInteger('user_id')->constrained();
            $table->unsignedBigInteger('prefcture_category_id')->constrained();
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
        Schema::dropIfExists('bathes');
    }
};

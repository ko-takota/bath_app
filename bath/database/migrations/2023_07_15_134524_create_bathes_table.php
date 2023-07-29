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
            $table->string('address');
            $table->unsignedBigInteger('admin_id');
            $table->unsignedBigInteger('prefcture_category_id')->nullable()->constrained();
            $table->timestamps();

            $table->foreign('admin_id')->references('id')->on('admins');
            // $table->foreign('id')->references('manage_bath_id')->on('admins');
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

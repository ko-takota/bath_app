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
        Schema::create('manage_bath_relations', function (Blueprint $table) {
            $table->unsignedBigInteger('manage_bath_id');
            $table->unsignedBigInteger('bath_id');

            // 'manage_bath_id' を外部キーとして設定
            $table->foreign('manage_bath_id')->references('id')->on('admins');

            // 'bath_id' を外部キーとして設定
            $table->foreign('bath_id')->references('id')->on('bathes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('manage_bath_relations');
    }
};

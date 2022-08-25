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
        Schema::create('area_groups', function (Blueprint $table) {
            $table->id();
            $table->string('name', 128)->comment('勤務地グループ');
            $table->boolean('view_flg')->nullable()->unsigned()->default(1)->comment('公開フラグ');

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
        Schema::dropIfExists('area_groups');
    }
};

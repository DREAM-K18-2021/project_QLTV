<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMuonsachTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('muonsach', function (Blueprint $table) {
            $table->id();
            $table->string('tensach');
            $table->string('masach');
            $table->string('tendocgia');
            $table->string('madocgia');
            $table->string('sophieu');
            $table->string('ngaymuon');
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
        Schema::dropIfExists('muonsach');
    }
}

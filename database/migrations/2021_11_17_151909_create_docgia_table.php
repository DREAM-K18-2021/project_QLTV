<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocgiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docgia', function (Blueprint $table) {
            $table->id();
            $table->string('tendocgia');
            $table->string('madocgia');
            $table->string('lop');
            $table->integer('sodienthoai');
            $table->string('sachdamuon')->nullable(true);
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
        Schema::dropIfExists('docgia');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pengguna extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengguna', function (Blueprint $table) {
            $table->increments('id');
            $table->string('innameid', 50);
            $table->string('innameonly', 50);
            $table->string('inemail', 50);
            $table->string('intgl_lahir', 20);
            $table->string('intelepon', 20);
            $table->string('ingender', 10);
            $table->string('inalamat', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengguna');
    }
}

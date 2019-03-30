<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsatidzTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asatidz', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama',30);
            $table->string('nip',20);
            $table->boolean('gender');
            $table->string('hp',14);
            $table->string('email',30);
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
        Schema::dropIfExists('asatidz');
    }
}

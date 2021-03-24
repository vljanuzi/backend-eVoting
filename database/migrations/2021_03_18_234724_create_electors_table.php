<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElectorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('electors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('election_id');
            $table->unsignedBigInteger('user_reg_id');
            $table->string('name');
            $table->string('email');
            $table->date('joined_at');
            $table->date('response_at');
            $table->timestamps();
            $table->foreign('election_id')->references('id')->on('elections');
            $table->foreign('user_reg_id')->references('id')->on('user_regs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('electors');
    }
}

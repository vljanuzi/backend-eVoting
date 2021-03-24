<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElectionOrganizersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('election_organizers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_reg_id');
            $table->string('election_name');
            $table->string('status');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('votes');
            $table->timestamps();
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
        Schema::dropIfExists('election_organizers');
    }
}

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
        Schema::create('invitations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('inviteur_id');
            $table->foreign('inviteur_id')->references('id')->on('users');
            $table->unsignedBigInteger('invité_id');
            $table->foreign('invité_id')->references('id')->on('personnages');
            $table->unsignedBigInteger('crew_id');
            $table->foreign('crew_id')->references('id')->on('groupes');
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
        Schema::dropIfExists('invitations');
    }
};

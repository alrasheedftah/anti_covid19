<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('person_group', function (Blueprint $table) {
            // $table->id();
            // $table->foreignId('person_id')->constrained();

            $table->integer('agree')->default(0);
            $table->unsignedBigInteger('person_id');
            $table->foreign('person_id')->references('id')->on('persons');

            $table->unsignedBigInteger('group_id');
            $table->foreign('group_id')->references('id')->on('groups');


            // $table->foreignId('group_id')->constrained();
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
        Schema::dropIfExists('person_group');
    }
}

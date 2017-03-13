<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('club_id');
            $table->date('start_date');
            $table->date('end_date');
            $table->timeTz('starts_at');
            $table->timeTz('ends_at');
            $table->integer('targets');
            $table->string('ruleset');
            $table->text('info');
            $table->boolean('confirmed');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('events');
    }
}

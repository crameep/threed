<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

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
            $table->integer('club_id')->default(0);
            $table->date('date');
            $table->timeTz('starts_at');
            $table->timeTz('ends_at');
            $table->integer('targets');
            $table->text('info')->nullable();
            $table->integer('adult_price')->nullable();
            $table->integer('child_price')->nullable();
            $table->integer('member_price')->nullable();
            $table->boolean('confirmed')->default(false);
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

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket_event', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('value', 8, 2);
            $table->string('sector');
            $table->integer('event_id')->unsigned();
            $table->timestamps();

            $table->foreign('event_id')
                ->references('id')
                ->on('event')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ticket_event');
    }
}

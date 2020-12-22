<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameQuantityToNumberOfTickets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ticket_payments', function (Blueprint $table) {
            $table->renameColumn('quantity', 'number_of_tickets');
            $table->renameColumn('team', 'team_name');
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ticket_payments', function (Blueprint $table) {
            //
        });
    }
}

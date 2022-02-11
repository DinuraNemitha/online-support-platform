<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupportTicketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('support_tickets', function (Blueprint $table) {
            $table->id();
            $table->string('ref_id')->unique();
            $table->string('customer_email');
            $table->string('customer_name');
            $table->longText('description');
            $table->string('customer_contact_no')->nullable();
            $table->integer('opened_by')->nullable();
            $table->tinyInteger('status')->default(1)->comment('0-closed, 1-initial,2-inprogress');
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
        Schema::dropIfExists('support_tickets');
    }
}

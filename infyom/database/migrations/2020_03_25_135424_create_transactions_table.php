<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // user making transaction
            $table->unsignedBigInteger('qrcode_owner_id')->nullable();
            $table->unsignedBigInteger('qrcode_id');
            $table->string('payment_method')->nullable(); // paypal, stripe,paystack
            $table->longText('message')->nullable();
            $table->float('amount', 10, 4);
            $table->string('status')->default('initaited'); // initaited, payment failed, completed and succrssessful
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
        Schema::dropIfExists('transactions');
    }
}

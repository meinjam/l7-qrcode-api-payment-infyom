<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQrcodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qrcodes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('website')->nullable();
            $table->string('company_name');
            $table->string('product_name');
            $table->string('product_url')->nullable();
            $table->string('callback_url');
            $table->string('qrcode_path')->nullable(); // path to qrcode image is saved on our sarver
            $table->float('amount', 10, 4);
            $table->tinyInteger('status');
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
        Schema::dropIfExists('qrcodes');
    }
}

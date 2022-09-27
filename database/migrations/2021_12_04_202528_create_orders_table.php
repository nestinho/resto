<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('food');
            $table->decimal('price');
            $table->integer('quantity');
            $table->decimal('total');
            $table->integer('order_date');
            $table->string('status');
            $table->string('customer_name');
            $table->integer('customer_contact');
            $table->string('customer_email');
            $table->string('customer_address');
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
        Schema::dropIfExists('orders');
    }
}

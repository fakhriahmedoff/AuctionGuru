<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('plan_id')->references('id')->on('plans');
            $table->string('name', 100);
            $table->string('email', 100);
            $table->longText('message');
            $table->enum('payment_method',['cash', 'cashless']);
            $table->string('uploaded_files');
            $table->enum('order_status', ['completed','accepted','pending','rejected'])->default('pending');
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
};

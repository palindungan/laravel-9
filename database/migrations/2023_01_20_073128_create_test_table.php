<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mar_mas_item', function (Blueprint $table) {
            $table->char('id')->nullable();
            $table->string('name')->nullable();
            $table->string('brand')->nullable();
            $table->integer('price')->nullable();
            $table->timestamps();
        });

        Schema::create('mar_mas_marketplace', function (Blueprint $table) {
            $table->char('id')->nullable();
            $table->string('platform')->nullable();
            $table->string('brand')->nullable();
            $table->string('store_name')->nullable();
            $table->timestamps();
        });

        Schema::create('mar_mas_expedition', function (Blueprint $table) {
            $table->char('id')->nullable();
            $table->string('name')->nullable();
            $table->timestamps();
        });

        Schema::create('mar_mas_customer', function (Blueprint $table) {
            $table->char('id')->nullable();
            $table->string('name')->nullable();
            $table->string('province')->nullable();
            $table->string('city')->nullable();
            $table->text('address')->nullable();
            $table->timestamps();
        });

        Schema::create('mar_mas_tra_order', function (Blueprint $table) {
            $table->char('id')->nullable();
            $table->char('customer_id')->nullable();
            $table->char('marketplace_id')->nullable();
            $table->char('expedition_id')->nullable();
            $table->timestamps();
        });

        Schema::create('mar_mas_tra_order_detail', function (Blueprint $table) {
            $table->char('id')->nullable();
            $table->char('order_id')->nullable();
            $table->char('item_id')->nullable();
            $table->integer('qty')->nullable();
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
        Schema::dropIfExists('test');
    }
};

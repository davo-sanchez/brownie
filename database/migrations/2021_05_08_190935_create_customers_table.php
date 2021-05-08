<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('pid_customer');
            $table->string('code',20);
            $table->string('name',150);
            $table->string('trade_name',150)->nullable();
            $table->string('logo');
            $table->unsignedDecimal('credit_limit', $precision = 8, $scale = 2);
            $table->smallInteger('open_tickets');
            $table->boolean('active')->default(1);
            $table->boolean('provider');
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
        Schema::dropIfExists('customers');
    }
}

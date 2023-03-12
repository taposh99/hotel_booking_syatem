<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('address_type')->default('Primary')->nullable();
            $table->string('address_title')->nullable();
            $table->string('address_line_1')->nullable();
            $table->string('address_line_2')->nullable();
            $table->string('city')->nullable();
            $table->integer('state_id')->unsigned()->nullable();
            $table->string('zip_code')->nullable();
            $table->integer('country_id')->unsigned()->nullable();
            $table->string('phone')->nullable();
            $table->float('latitude')->nullable();
            $table->float('longitude')->nullable();
            $table->integer('addressable_id');
            $table->string('addressable_type');
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
        Schema::dropIfExists('addresses');
    }
}

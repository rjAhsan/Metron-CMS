<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->increments('id');
            $table->text('SH')->nullable();
            $table->longText('SP')->nullable();
            $table->boolean('btn')->nullable();
            $table->string('SM')->nullable();
            $table->string('SSM')->nullable();
            $table->string('SSMM')->nullable();
            $table->longText('SSP')->nullable();
            $table->string('SSprojects')->nullable();
            $table->string('SSEmploy')->nullable();
            $table->string('SSCustomer')->nullable();
            $table->string('SSAward')->nullable();
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
        Schema::dropIfExists('abouts');
    }
}

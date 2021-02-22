<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutUSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_u_s', function (Blueprint $table) {
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
        Schema::dropIfExists('about_u_s');
    }
}

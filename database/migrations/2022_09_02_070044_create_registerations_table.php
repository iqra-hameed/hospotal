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
        Schema::create('registerations', function (Blueprint $table) {
            $table->id('id');
           // $table->string('lead_id');
            $table->unsignedBigInteger('lead_id');
             $table->foreign('lead_id')->references('id')->on('leads')->onDelete('cascade');
             $table->string('father_name');
            //  $table->string('course');
              $table->unsignedBigInteger('course');
             $table->foreign('course')->references('id')->on('courses')->onDelete('cascade');
             $table->string('discount');
             $table->enum('installments',['fullpay','half','2 installments']);
             $table->enum('course_status',['active','running','started','complete']);
             $table->string('admission_date');
             $table->string('fee_date');
             $table->enum('status',['active','running','started','complete']);
             $table->string('refrel');
             $table->string('refrel_percentage');
            // $table->string('batch_id');
              $table->unsignedBigInteger('batch_id');
             $table->foreign('batch_id')
            ->references('id')->on('batches')->onDelete('cascade');


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
        Schema::dropIfExists('registerations');
    }
};

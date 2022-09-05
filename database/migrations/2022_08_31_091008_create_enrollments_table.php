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
        Schema::create('enrollments', function (Blueprint $table) {
            $table->id('enroll_id');
           $table->string('lead_id');
            $table->string('father_name');
            $table->string('course');
            // $table->unsignedBigInteger('course');
            // $table->foreign('course')->references('id')->on('courses')->onDelete('cascade');
            $table->string('discount');
            $table->enum('installments',['fullpay','half','2 installments']);
            $table->enum('course_status',['active','running','started','complete']);
            $table->string('admission_date');
            $table->string('fee_date');
            $table->enum('status',['active','running','started','complete']);

            // $table->unsignedBigInteger('refrel');
            // $table->foreign('refrel')
            // ->references('id')
            // ->on('refrels')
            // ->onDelete('cascade');
            $table->string('refrel');
            $table->string('refrel_percentage');
            $table->string('batch_id');
            // $table->unsignedBigInteger('batch_id');
            // $table->foreign('batch_id')
            // ->references('id')
            // ->on('batches')
            // ->onDelete('cascade');

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
        Schema::dropIfExists('enrollments');
    }
};

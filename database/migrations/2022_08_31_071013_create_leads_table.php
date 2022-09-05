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

        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('date');
            $table->string('purpose');
            $table->enum('lead_status', ['active','running','started','complete' ]);
            $table->string('refrel');
            // $table->unsignedBigInteger('refrel');
            // $table->foreign('refrel')
            // ->references('name')
            // ->on('refrels')
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
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Schema::drop('leads');
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
       // Schema::dropIfExists('leads');
    }
};

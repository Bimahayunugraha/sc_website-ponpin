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
        Schema::create('topic_evaluation', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            // $table->dateTime('start_date');
            // $table->dateTime('end_date');
            $table->text('excerpt');
            $table->text('description');
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
        Schema::dropIfExists('topic_evaluation');
    }
};

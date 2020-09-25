<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RateMTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rating_m', function (Blueprint $table) {
            $table->id('No_PM');
            $table->string('rating_m_id');
            $table->integer('rate_m_index');
            $table->string('project_m_id');
            $table->string('user_m_id');
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
        Schema::dropIfExists('rating_m');
    }
}

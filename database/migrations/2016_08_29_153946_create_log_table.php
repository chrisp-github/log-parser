<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('date');
            $table->integer('response_code');
            $table->integer('bytes');
            $table->string('page_url');
            $table->string('request_url');
            $table->integer('request_id')->unsigned();
            $table->integer('user_agent_id')->unsigned();
            $table->integer('connection_id')->unsigned();

            $table->foreign('request_id')
                ->references('id')->on('request')
                ->onDelete('cascade');

            $table->foreign('user_agent_id')
                ->references('id')->on('user_agent')
                ->onDelete('cascade');

            $table->foreign('connection_id')
                ->references('id')->on('connection')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('log');
    }
}

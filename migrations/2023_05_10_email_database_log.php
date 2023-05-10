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
        Schema::create('email_log', static function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('date');
            $table->string('from')->nullable();
            $table->string('to')->nullable();
            $table->string('cc')->nullable();
            $table->string('bcc')->nullable();
            $table->string('subject');
            $table->text('body');
            $table->text('headers')->nullable();
            $table->longText('attachments')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('email_log');
    }
};

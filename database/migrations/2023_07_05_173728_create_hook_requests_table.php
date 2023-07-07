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
        Schema::create('hook_requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("client_id");
            $table->unsignedBigInteger("id_hook_identifier")->nullable();
            $table->longText("payload")->nullable();
            $table->timestamp("hook_received_date");
            $table->boolean("api_success")->default(false);
            $table->integer("api_status")->nullable();
            $table->text("api_response")->nullable();
            $table->integer("api_attempt")->default(1);
            $table->timestamp("api_request_date", $precision = 0)->nullable();
            $table->timestamps();

            $table->foreign('client_id')->references('id')->on('clients')
            ->onUpdate('cascade')
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
        Schema::dropIfExists('hook_requests');
    }
};

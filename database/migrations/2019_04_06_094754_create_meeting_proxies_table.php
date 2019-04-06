<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeetingProxiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meeting_proxies', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('meeting_id')->index();
            $table->unsignedBigInteger('proxy_id')->index();
            $table->unsignedBigInteger('principal_id')->index();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meeting_proxies');
    }
}

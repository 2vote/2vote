<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMotionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motions', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('topic_id')->index();
            $table->enum('status', ['preparation', 'open', 'closed'])->default('preparation');
            
            $table->boolean('anonymous')->default(false);
            $table->enum('majority', ['regular', 'twothird', 'fourfifth'])->default('regular');

            $table->json('result');

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
        Schema::dropIfExists('motions');
    }
}

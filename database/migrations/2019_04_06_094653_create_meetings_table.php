<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeetingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meetings', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->tinyInteger('version')->default(3);
            $table->enum('status', ['preparation', 'open', 'closed', 'published'])->default('preparation');
            $table->enum('type', ['ga', 'bog'])->default('ga');

            $table->date('date');
            $table->datetime('start')->nullable()->default(null);
            $table->datetime('end')->nullable()->default(null);

            $table->unsignedBigInteger('chairman_by_id')->index();
            $table->unsignedBigInteger('called_by_id')->index();

            $table->json('data')->nullable()->default(null);

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
        Schema::dropIfExists('meetings');
    }
}

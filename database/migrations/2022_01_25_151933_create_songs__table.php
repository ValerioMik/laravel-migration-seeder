<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songs_', function (Blueprint $table) {
            $table->id();
            $table->string('song_name');
            $table->date('release_date');
            $table->string('reference_album');
            $table->text('song_text');
            $table->bigInteger('records_sold');
            $table->string('record_company');
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
        Schema::dropIfExists('songs_');
    }
}

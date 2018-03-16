<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUploadTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // create upload table
        Schema::create('upload', function(Blueprint $table) {
            $table->increments('id');
            $table->string('filename');
            $table->string('mime');
            $table->string('original_filetime');
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
        // drop upload table
        Schema::drop('upload');
    }
}

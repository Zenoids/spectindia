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
        Schema::create('volunteers', function (Blueprint $table) {
            $table->id();
            $table->string('voter_id');
            $table->string('name');
            $table->string('mobile_no');
            $table->string('email')->unique();
            $table->string('whatsapp_no');
            $table->string('facebook_id');
            $table->string('twitter_id');
            $table->text('address');
            $table->string('ward_name_no');
            $table->string('assembly_constituency');
            $table->string('parliament_seat');
            $table->string('state');
            $table->text('contribute_options');
            $table->text('about_yourself');
            $table->string('file_path');
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
        Schema::dropIfExists('volunteers');
    }
};

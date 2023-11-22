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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->longText('address1');
            $table->longText('address2');
            $table->longText('address3');
            $table->longText('address4');
            $table->string('phone');
            $table->string('logo');
            $table->string('image');
            $table->string('icon');
            $table->string('facebook');
            $table->string('instragram');
            $table->string('linkdln');
            $table->string('twitter');
            $table->string('slogun');
            $table->longText('about');
            $table->longText('note');
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
        Schema::dropIfExists('companies');
    }
};

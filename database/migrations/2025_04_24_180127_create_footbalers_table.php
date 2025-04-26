<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('footballers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->enum('gender', ['Мужской', 'Женский']);
            $table->date('birth_date');
            $table->foreignId('team_id')->constrained('teams');
            $table->enum('country', ['Россия', 'США', 'Италия']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('footballers');
    }
};

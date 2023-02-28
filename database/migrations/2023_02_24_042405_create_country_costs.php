<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountryCosts extends Migration
{

    public function up()
    {
        Schema::create('country_costs', function (Blueprint $table) {
            $table->id();
            $table->integer('country_id');
            $table->string('cost_title');
            $table->longText('cost_desc');
            $table->timestamps();
        });

        Schema::create('cost_questions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cost_id')->constrained('country_costs')->onDelete('cascade');
            $table->string('question');
            $table->text('answer');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('country_costs');
        Schema::dropIfExists('cost_questions');
    }
}

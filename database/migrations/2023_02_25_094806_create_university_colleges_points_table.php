<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUniversityCollegesPointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('university_colleges_points', function (Blueprint $table) {
            $table->id();
            $table->foreignId('uni_college_id')->constrained('university_colleges')->onDelete('cascade');
            $table->string('uni_college_points');
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
        Schema::dropIfExists('university_colleges');
        Schema::dropIfExists('university_colleges_points');
    }
}

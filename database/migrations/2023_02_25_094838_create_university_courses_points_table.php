<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUniversityCoursesPointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('university_courses_points', function (Blueprint $table) {
            $table->id();
            $table->foreignId('uni_course_id')->constrained('university_courses')->onDelete('cascade');
            $table->string('uni_course');
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
        Schema::dropIfExists('university_courses');
        Schema::dropIfExists('university_courses_points');
    }
}

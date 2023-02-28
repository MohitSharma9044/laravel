<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUniversitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('universities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('country_id')->constrained('countries')->onDelete('cascade');
            $table->string('uni_name');
            $table->string('uni_slug');
            $table->string('uni_logo');
            $table->string('uni_thumb_image');
            $table->string('uni_banner');
            $table->string('uni_mobiles');
            $table->string('uni_emails');
            $table->string('uni_brochure')->nullable();
            $table->longText('uni_description');
            $table->string('uni_program_title');
            $table->string('uni_course_heading');
            $table->string('uni_college_heading');
            $table->string('status')->default('Disabled');
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
        Schema::dropIfExists('countries');
        Schema::dropIfExists('universities');
    }
}

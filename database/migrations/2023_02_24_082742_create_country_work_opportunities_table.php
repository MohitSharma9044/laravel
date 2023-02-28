<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountryWorkOpportunitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('country_work_opportunities', function (Blueprint $table) {
            $table->id();
            $table->integer('country_id');
            $table->string('title');
            $table->longText('content');
            $table->string('part_title');
            $table->longText('part_content');
            $table->string('study_title');
            $table->longText('study_content');
            $table->string('study_title2');
            $table->longText('study_content2');
            $table->timestamps();
        });
        Schema::create('work_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('work_id')->constrained('country_work_opportunities')->onDelete('cascade');
            $table->string('work_title');
            $table->text('work_image');
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
        Schema::dropIfExists('country_work_opportunities');
        Schema::dropIfExists('work_details');
    }
}

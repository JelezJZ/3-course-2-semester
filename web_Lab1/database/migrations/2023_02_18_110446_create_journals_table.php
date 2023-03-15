<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('journals', function (Blueprint $table) {
			$table->id();
            $table->date('date')->nullable();
			$table->integer('cource')->nullable();
			$table->string('idSubject')->nullable();
			$table->string('idGroup')->nullable();
			$table->integer('lecture')->nullable();
			$table->integer('practice')->nullable();
			$table->integer('lab')->nullable();
			$table->integer('module')->nullable();
			$table->integer('consulSemester')->nullable();
			$table->integer('consulExam')->nullable();
			$table->integer('test')->nullable();
			$table->integer('exam')->nullable();
			$table->integer('coursework')->nullable();
			$table->integer('wrcBachelor')->nullable();
			$table->integer('wrcSpecialist')->nullable();
			$table->integer('wrcMagister')->nullable();
			$table->integer('guidePractice')->nullable();
			$table->integer('gosExam')->nullable();
			$table->integer('wrcReview')->nullable();
			$table->integer('wrcDef')->nullable();
			$table->integer('guideRraduate')->nullable();
			$table->integer('another')->nullable();
			$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('journals');
    }
};

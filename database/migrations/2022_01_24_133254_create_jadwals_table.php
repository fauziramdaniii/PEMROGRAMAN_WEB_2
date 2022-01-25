<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('code', 9)->unique();
            $table->string('name', 50);
            $table->string('gender', 1);
            $table->date('birth_date');
            $table->string('birth_place');
            $table->foreignId('faculty_id')->nullable();;
            $table->foreign('faculty_id')->references('id')->on('faculties')->onDelete('set null');
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
        Schema::dropIfExists('jadwals');
    }
}

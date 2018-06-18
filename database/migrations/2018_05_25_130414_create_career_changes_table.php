<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCareerChangesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('career_changes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id');
            $table->integer('career_id');
            $table->char('status');
            $table->string('reason')->nullable();
            $table->string('voluntary')->nullable();
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
        Schema::dropIfExists('career_changes');
    }
}

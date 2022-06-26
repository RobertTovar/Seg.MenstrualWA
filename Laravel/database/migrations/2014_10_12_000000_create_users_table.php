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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();

            $table->boolean('survey_1');
            $table->date('time_done_survey_1')->nullable();

            $table->boolean('survey_1_1');
            $table->date('time_done_survey_1_1')->nullable();

            $table->boolean('survey_1_2');
            $table->date('time_done_survey_1_2')->nullable();

            $table->boolean('survey_2');
            $table->date('time_done_survey_2')->nullable();

            $table->boolean('survey_2_1');
            $table->date('time_done_survey_2_1')->nullable();

            $table->boolean('survey_2_2');
            $table->date('time_done_survey_2_2')->nullable();

            $table->boolean('survey_3');
            $table->date('time_done_survey_3')->nullable();

            $table->boolean('survey_3_1');
            $table->date('time_done_survey_3_1')->nullable();

            $table->boolean('survey_3_2');
            $table->date('time_done_survey_3_2')->nullable();

            
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};

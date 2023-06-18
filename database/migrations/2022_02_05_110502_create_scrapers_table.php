<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScrapersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scrapers', function (Blueprint $table) {
            $table->id();
            // $table->string('CompanyName')->nullable();
            // $table->string('BGMEARegNo')->nullable();
            // $table->string('EPBRegNo')->nullable();
            // $table->string('Name')->nullable(); //
            // $table->string('Position')->nullable(); //
            // $table->string('Mobile')->nullable();
            // $table->string('Email')->nullable();

            $table->string('company_name');
            $table->string('member_reg_no');
            $table->string('applicant_name'); //
            $table->string('rep_designation'); //
            $table->string('rep_mobile');
            $table->string('rep_email');
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
        Schema::dropIfExists('scrapers');
    }
}

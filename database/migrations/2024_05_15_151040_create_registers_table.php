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
        Schema::create('registers', function (Blueprint $table) {
            $table->id();

            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone_number');
            
            $table->string('profession');

            $table->string('bio');
            $table->string('talk_idea');
            $table->string('talk_idea_outline');
            $table->string('audience_takeaway_message');
            $table->string('question1');
            $table->string('question2');
            $table->string('location');
            $table->string('question3');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registers');
    }
};

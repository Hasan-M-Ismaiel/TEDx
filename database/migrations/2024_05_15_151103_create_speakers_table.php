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
        Schema::create('speakers', function (Blueprint $table) {
            $table->id();

            //this should be deleted because we will use many-to-many relationship
            // $table->foreignId('event_id')->constrained()->onDelete('cascade');
            
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone_number');

            $table->string('profession');
            
            $table->string('bio');

            $table->string('talk_idea');

            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('linkedin')->nullable();

            $table->string('website')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('speakers');
    }
};

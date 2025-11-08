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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            // main details
            $table->string('admission_number')->unique(); // i.e. 
            $table->string('first_name');
            $table->string('middle_names')->nullable(); // for 1+ middle names
            $table->string('last_name');
            $table->string('photo')->nullable(); // avatar image
            $table->enum('gender', ['male', 'female', 'other']); // gender
            $table->date('date_of_birth'); // date of birth
            // Contacts
            $table->string('email')->unique();
            $table->string('phone'); // primary i.e. safaricom
            $table->string('alternative_phone')->nullable(); // secondary phone i.e. airtel
            // parental details
            $table->string('parent_name'); // parent or guardian or next of kin
            $table->string('parent_phone')->nullable(); // parent or guardian phone

            $table->foreignId('department_id')->constrained()->cascadeOnDelete();
            $table->foreignId('course_id')->constrained()->cascadeOnDelete();
            $table->date('admission_date')->nullable();
            $table->index('department_id');
            $table->index('course_id');
            $table->index('admission_number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};

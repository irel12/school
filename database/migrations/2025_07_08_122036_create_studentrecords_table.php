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
        Schema::create('studentrecords', function (Blueprint $table) {
            $table->id();
            $table->string('student_name');
            $table->string('student_address');
            $table->string('student_contact');
            $table->string('student_course');
            $table->foreignId('customer_id')->constrained('customer', 'id')->cascadeOnUpdate()->cascadeOnDelete();
            $table->integer('number_books');
            $table->double('balance');
            $table->integer('total');
            $table->softDeletes();
            $table->timestamps();
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('studentrecords');
    }
};

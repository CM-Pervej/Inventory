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
        Schema::table('users', function (Blueprint $table) {
            $table->date('birth')->nullable();
            $table->enum('gender', ['male', 'female', 'other'])->nullable();
            $table->string('village')->nullable();
            $table->string('po')->nullable();
            $table->string('district')->nullable();
            $table->string('country')->nullable();
            $table->string('phone')->nullable();
            $table->string('position')->nullable();
            $table->date('start_date')->nullable();
            $table->string('contract')->nullable();
            $table->string('emergency_contact_name')->nullable();
            $table->string('emergency_contact_number')->nullable();
            $table->decimal('salary', 12, 2)->nullable();
            $table->boolean('status')->default(1); // 1 = active, 0 = inactive
            $table->string('image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'birth', 'gender', 'village', 'po', 'district', 'country', 'phone', 'position', 'start_date', 'contract', 'emergency_contact_name', 'emergency_contact_number', 'salary', 'status', 'image',
            ]);
        });
    }
};

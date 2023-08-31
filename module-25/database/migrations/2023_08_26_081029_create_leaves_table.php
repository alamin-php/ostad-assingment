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
        Schema::create('leaves', function (Blueprint $table) {
            $table->id();
            $table->string('start_date',50);
            $table->string('end_date',50);
            $table->string('total_day',50);
            $table->string('reason',300);
            $table->string('status',50)->default('pending');

            // F-Key
            $table->unsignedBigInteger('user_id')->unique();
            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->cascadeOnUpdate()
            ->restrictOnDelete();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leaves');
    }
};

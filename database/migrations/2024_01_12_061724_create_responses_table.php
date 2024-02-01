<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('responses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('complaint_id')->constrained('complaints')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('admin_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->text('response');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('responses');
    }
};

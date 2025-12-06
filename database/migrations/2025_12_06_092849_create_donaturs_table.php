<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('donaturs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->integer('amount'); // nominal donasi
            $table->string('status')->default('pending'); // pending / success / failed
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('donaturs');
    }
};

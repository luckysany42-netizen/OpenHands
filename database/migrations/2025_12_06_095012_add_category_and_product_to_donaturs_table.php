<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('donaturs', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id')->nullable()->after('email');
            $table->unsignedBigInteger('product_id')->nullable()->after('category_id');
        });
    }

    public function down(): void
    {
        Schema::table('donaturs', function (Blueprint $table) {
            $table->dropColumn(['category_id', 'product_id']);
        });
    }
};

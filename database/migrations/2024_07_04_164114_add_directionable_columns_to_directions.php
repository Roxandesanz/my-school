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
        Schema::table('directions', function (Blueprint $table) {
            $table->unsignedBigInteger('directionable_id');
            $table->string('directionable_type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('directions', function (Blueprint $table) {
            $table->dropColumn('directionable_id');
            $table->dropColumn('directionable_type');
        });
    }
};

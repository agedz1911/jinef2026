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
        Schema::table('welcome_messages', function (Blueprint $table) {
            $table->string('name2')->nullable()->after('description');
            $table->string('title2')->nullable()->after('name2');
            $table->string('image2')->nullable()->after('title2');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('welcome_messages', function (Blueprint $table) {
            $table->dropColumn('name2');
            $table->dropColumn('title2');
            $table->dropColumn('image2');
        });
    }
};

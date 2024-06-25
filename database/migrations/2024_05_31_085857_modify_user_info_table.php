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
        Schema::table('user_info', function (Blueprint $table) {
            //
            $table->datetime('updated_at')->useCurrent()->useCurrentOnUpdate()->change();
        });

        Schema::table('users', function (Blueprint $table) {
            //
            $table->datetime('created_at')->useCurrent()->change();
            $table->datetime('updated_at')->useCurrent()->useCurrentOnUpdate()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user_info', function (Blueprint $table) {
            //
        });
    }
};

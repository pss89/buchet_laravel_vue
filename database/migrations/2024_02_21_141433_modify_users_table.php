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
            $table->string('name', 100)->change();
            $table->string('email', 100)->change();
            $table->string('user_id', 30)->unique()->index()->after('id');
            $table->datetime('email_verified_at')->change();
            $table->string('password', 255)->change();
            $table->datetime('created_at')->change();
            $table->datetime('updated_at')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};

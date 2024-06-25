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
        Schema::create('user_info', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_key');
            $table->foreign('user_key')->references('id')->on('users')->index();
            $table->string('name', 100)->index();
            $table->string('nick_name', 100)->nullable();
            $table->char('gender', 1)->index()->nullable();
            $table->date('birthday')->nullable();
            $table->string('phone', 20)->index();
            $table->string('zip_code', 10)->nullable();
            $table->string('default_address', 100)->nullable();
            $table->string('detail_address', 100)->nullable();
            $table->unique('user_key');
            $table->datetime('created_at')->useCurrent();
            $table->datetime('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_info');
    }
};

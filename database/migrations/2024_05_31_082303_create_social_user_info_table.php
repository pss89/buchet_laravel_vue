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
        Schema::create('social_user_info', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_key');
            $table->foreign('user_key', 'fk_social_user_info_user_key')
                  ->references('id')->on('users');
            $table->tinyInteger('social_type')->index();
            $table->unsignedBigInteger('social_id');
            $table->json('social_info');
            $table->unique(['social_type', 'social_id']);
            $table->datetime('created_at')->useCurrent();
            $table->datetime('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('social_user_info');
    }
};

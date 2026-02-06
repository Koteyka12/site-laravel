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
        Schema::table('post_tags', function (Blueprint $table) {
            $table->dropForeign(['tag_id']);
            $table->dropColumn(['tag_id', 'sorting']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('post_tags', function (Blueprint $table) {
            $table->foreignId('tag_id')->nullable()->constrained('post_tags')->nullOnDelete();
            $table->integer('sorting')->default(0);
        });
    }
};

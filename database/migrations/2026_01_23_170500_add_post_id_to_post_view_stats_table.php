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
        Schema::table('post_view_stats', function (Blueprint $table) {
            $table->dropUnique('post_view_stats_date_unique');
            $table->foreignId('post_id')->nullable()->after('id')->constrained()->cascadeOnDelete();
            $table->unique(['post_id', 'date'], 'post_view_stats_post_id_date_unique');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('post_view_stats', function (Blueprint $table) {
            $table->dropUnique('post_view_stats_post_id_date_unique');
            $table->dropForeign(['post_id']);
            $table->dropColumn('post_id');
            $table->unique('date', 'post_view_stats_date_unique');
        });
    }
};

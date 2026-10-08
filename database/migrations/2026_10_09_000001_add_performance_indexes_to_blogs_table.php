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
        Schema::table('blogs', function (Blueprint $table) {
            $table->index(['status', 'is_homepage', 'published_date'], 'blogs_status_homepage_pubdate_idx');
            $table->index(['status', 'published_date'], 'blogs_status_pubdate_idx');
            $table->index(['status', 'is_aboutpage', 'published_date'], 'blogs_status_aboutpage_pubdate_idx');
            $table->index(['status', 'is_locationpage', 'published_date'], 'blogs_status_locationpage_pubdate_idx');
            $table->index(['status', 'updated_at'], 'blogs_status_updated_at_idx');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->dropIndex('blogs_status_homepage_pubdate_idx');
            $table->dropIndex('blogs_status_pubdate_idx');
            $table->dropIndex('blogs_status_aboutpage_pubdate_idx');
            $table->dropIndex('blogs_status_locationpage_pubdate_idx');
            $table->dropIndex('blogs_status_updated_at_idx');
        });
    }
};

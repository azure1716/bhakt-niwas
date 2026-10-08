<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('short_description')->nullable();
            $table->longText('description')->nullable();
            $table->string('image')->nullable();

            // Categories and Topics stored as JSON for cross-database compatibility (MySQL & PostgreSQL json/jsonb)
            $table->json('categories')->nullable();
            $table->json('topics')->nullable();

            $table->string('related_sansthan_location')->nullable();
            $table->string('related_sansthan_link')->nullable();

            // SEO Fields
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();

            $table->boolean('is_homepage')->default(0);
            $table->boolean('is_aboutpage')->default(0);
            $table->boolean('is_locationpage')->default(0);

            $table->date('published_date')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};

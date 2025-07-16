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
        Schema::create('weddings', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('groom_name');
            $table->string('slogan')->nullable();
            $table->string('bride_name');
            $table->string('slug')->unique();
            $table->date('wedding_date');
            $table->time('wedding_time')->nullable();
            $table->string('venue_name')->nullable();
            $table->text('venue_address')->nullable();
            $table->string('google_map_link')->nullable();
            $table->string('theme')->default('default');
            $table->string('cover_photo')->nullable();
            $table->text('invitation_message')->nullable();
            $table->date('rsvp_deadline')->nullable();
            $table->boolean('is_published')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('weddings');
    }
};

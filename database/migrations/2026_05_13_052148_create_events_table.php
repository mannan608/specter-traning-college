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
        Schema::create('events', function (Blueprint $table) {
         $table->id();

            $table->string('title');

            $table->string('slug')
                ->unique();

            $table->text('short_description')
                ->nullable();

            $table->longText('description');

            $table->string('banner')
                ->nullable();

            $table->string('location');

            $table->dateTime('event_start_date');

            $table->dateTime('event_end_date')
                ->nullable();

            $table->string('organizer')
                ->nullable();

            $table->string('registration_link')
                ->nullable();

            $table->string('contact_email')
                ->nullable();

            $table->string('contact_phone')
                ->nullable();

            $table->string('meta_title')
                ->nullable();

            $table->text('meta_description')
                ->nullable();

            $table->enum(
                'status',
                [
                    'upcoming',
                    'ongoing',
                    'completed',
                    'cancelled'
                ]
            )->default('upcoming');

            $table->boolean('is_featured')
                ->default(false);

            $table->integer('views')
                ->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse migrations
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};

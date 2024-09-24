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
        Schema::create('event_data', function (Blueprint $table) {
            $table->id(); // autoincrementing id
            $table->integer('master_id')->default(0);
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->float('price')->default(0);
            $table->integer('contact_no')->default(0);
            $table->text('address')->nullable();
            $table->integer('status')->default(0);
            $table->text('facility')->nullable();
            $table->integer('used_days')->default(0);
            $table->date('posted_date')->nullable(); // Make it nullable if necessary
            $table->json('json_data')->nullable(); // New json_data column
            $table->timestamps(); // This adds created_at and updated_at columns
            $table->softDeletes(); // deleted_at, for soft deletes
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_data');
    }
};

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
        Schema::create('category_masters', function (Blueprint $table) {
            $table->id(); // Autoincrement ID
            $table->string('name')->nullable(); // Event name, nullable
            $table->text('icon_path')->nullable(); // Event name, nullable
            $table->integer('created_by')->default(0); // Creator ID, default 0
            $table->timestamps(); // created_at and updated_at
            $table->softDeletes(); // deleted_at, for soft deletes
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_masters');
    }
};

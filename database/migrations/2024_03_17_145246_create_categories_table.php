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
        // Database Create Table
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->string('description')->nullable();
            $table->text('image')->nullable();
            $table->integer('is_parent')->default(0)->comment('0 for parent, Any value for child');
            $table->integer('featured')->default(0)->comment('0 for normal, 1 value for featured');
            $table->string('icon_class')->nullable();
            $table->integer('status')->default(0)->comment('0 for inactive, 1 value for active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};

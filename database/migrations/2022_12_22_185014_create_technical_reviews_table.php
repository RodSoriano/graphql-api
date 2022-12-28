<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Route;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('technical_reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Route::class)->constrained()->cascadeOnDelete();
            $table->string('leaded_by');
            $table->string('club');
            $table->date('reviewed_at')->nullable();
            $table->text('description');
            $table->json('detail');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('technical_reviews');
    }
};

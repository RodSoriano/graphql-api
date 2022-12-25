<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Area;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('routes', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Area::class)->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->string('grade');
            $table->integer('quick_draw_count');
            $table->string('length');
            $table->string('setters');
            $table->string('first_ascend');
            $table->date('bolted_at');
            $table->text('description');
            $table->string('detail');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('routes');
    }
};

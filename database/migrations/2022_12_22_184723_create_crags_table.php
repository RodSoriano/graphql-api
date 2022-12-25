<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('crags', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('location');
            $table->integer('route_count');
            $table->text('get_here');
            $table->text('description');
            $table->string('detail');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('crags');
    }
};

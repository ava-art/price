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
        Schema::create('price', function (Blueprint $table) {
            $table->id();
            $table->integer('codeid');
            $table->string('category');
            $table->string('groupp');
            $table->string('subgroup');
            $table->string('name');
            $table->string('brand');
            $table->string('price');
            $table->string('onskald');
            $table->date('inway');
            $table->string('rrc');
            $table->string('volume');
            $table->string('shtrihcode');
            $table->string('description');
            $table->integer('akcia');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('price');
    }
};

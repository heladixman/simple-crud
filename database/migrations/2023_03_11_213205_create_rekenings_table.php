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
        Schema::create('rekenings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('userId');
            $table->string('noRek');
            $table->unsignedBigInteger('rekeningTypeId');
            $table->string('ownerName');
            $table->decimal('balance', $precision = 16, $scale = 2);
            $table->decimal('currentBalance', $precision = 16, $scale = 2);
            $table->timestamps();

            $table->foreign('userId')->references('id')->on('users');
            $table->foreign('rekeningTypeId')->references('id')->on('rekening_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekenings');
    }
};

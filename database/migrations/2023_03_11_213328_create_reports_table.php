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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rekeningId');
            $table->unsignedBigInteger('reportType');
            $table->unsignedBigInteger('categoryId');
            $table->unsignedBigInteger('contactId');
            $table->string('noRek');
            $table->decimal('totalCost', $precision = 16, $scale = 2);
            $table->date('dateDone');
            $table->string('note')->nullable();
            $table->timestamps();

            $table->foreign('rekeningId')->references('id')->on('rekenings');
            $table->foreign('reportType')->references('id')->on('report_types');
            $table->foreign('categoryId')->references('id')->on('categories');
            $table->foreign('contactId')->references('id')->on('contacts');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};

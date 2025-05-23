<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('company_person', function (Blueprint $table): void {
            $table->foreignId('company_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('person_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('type')->nullable();

            $table->primary(['company_id', 'person_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('company_person');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('spk_number', 100)->unique();
            $table->string('wbs_number', 100);
            $table->string('contract_name')->nullable();
            $table->string('vendor_name')->nullable();
            $table->string('region', 50)->nullable();
            $table->decimal('contract_value', 18, 2)->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->date('bastp_date')->nullable();
            $table->integer('progress_percentage')->default(0);
            $table->enum('status', [
                'DRAFT',
                'CONSTRUCTION_REVIEW',
                'ACCOUNTING_REVIEW',
                'COMPLETED'
            ])->default('DRAFT');
            $table->timestamps();

            $table->index('wbs_number');
            $table->index('vendor_name');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};

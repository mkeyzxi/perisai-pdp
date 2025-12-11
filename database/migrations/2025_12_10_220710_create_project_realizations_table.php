<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('project_realizations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->constrained('projects')->onDelete('cascade');

            $table->string('sap_material_code', 50)->nullable();
            $table->decimal('quantity_installed', 15, 3)->nullable();

            $table->string('asset_number', 100)->nullable();
            $table->text('notes')->nullable();

            $table->boolean('is_reconciled')->default(false);

            $table->uuid('created_by');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('project_realizations');
    }
};

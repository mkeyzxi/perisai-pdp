<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('material_movements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->constrained('projects')->onDelete('cascade');

            $table->string('document_no', 50)->nullable();
            $table->date('posting_date')->nullable();
            $table->string('unloading_point', 100)->nullable();
            $table->string('ref_doc_no', 100)->nullable();

            $table->string('sap_material_code', 50)->nullable();
            $table->text('material_description')->nullable();
            $table->string('uom', 10)->nullable();

            $table->decimal('quantity_out', 15, 3)->nullable();
            $table->decimal('val_currency', 18, 2)->nullable();

            $table->string('header_text', 255)->nullable();
            $table->string('cost_element', 50)->nullable();
            $table->string('wbs_element', 100)->nullable();

            $table->timestamp('created_at')->nullable();

            $table->index(['project_id', 'sap_material_code']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('material_movements');
    }
};

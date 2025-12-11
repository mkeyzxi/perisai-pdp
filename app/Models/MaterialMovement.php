<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MaterialMovement extends Model
{
    protected $fillable = [
        'project_id',
        'document_no',
        'posting_date',
        'unloading_point',
        'ref_doc_no',
        'sap_material_code',
        'material_description',
        'uom',
        'quantity_out',
        'val_currency',
        'header_text',
        'cost_element',
        'wbs_element'
    ];

    public $timestamps = false;

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}

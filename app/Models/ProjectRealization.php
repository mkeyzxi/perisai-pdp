<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectRealization extends Model
{
    protected $fillable = [
        'project_id',
        'sap_material_code',
        'quantity_installed',
        'asset_number',
        'notes',
        'is_reconciled',
        'created_by'
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}

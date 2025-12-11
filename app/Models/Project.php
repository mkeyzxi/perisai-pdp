<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'spk_number',
        'wbs_number',
        'contract_name',
        'vendor_name',
        'region',
        'contract_value',
        'start_date',
        'end_date',
        'bastp_date',
        'progress_percentage',
        'status',
    ];

    public function movements()
    {
        return $this->hasMany(MaterialMovement::class);
    }

    public function realizations()
    {
        return $this->hasMany(ProjectRealization::class);
    }

    public function documents()
    {
        return $this->hasMany(ProjectDocument::class);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectsSeeder extends Seeder
{
    public function run()
    {
        Project::create([
            'spk_number' => 'SPK-001',
            'wbs_number' => 'WBS1001',
            'contract_name' => 'Pekerjaan Pemasangan Jaringan',
            'vendor_name' => 'Vendor A',
            'region' => 'Mamuju',
            'contract_value' => 500000000,
            'start_date' => '2025-01-01',
            'end_date' => '2025-06-01',
            'progress_percentage' => 10,
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProjectRealization;
use Illuminate\Support\Str;
use illuminate\Support\Facades\DB;
class ProjectRealizationsSeeder extends Seeder
{
    public function run(): void
    {
        $project = DB::table('projects')->first();

        ProjectRealization::create([
            'id' => Str::uuid(),
            'project_id' => $project->id,
            'realization_date' => '2025-03-10',
            'amount' => 25000000,
            'description' => 'Pembelian material tahap 1',
            'created_by' => DB::table('users')->first()->id,
        ]);
    }
}

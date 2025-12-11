<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MaterialMovement;
use Illuminate\Support\Str;
use illuminate\Support\Facades\DB;

class MaterialMovementsSeeder extends Seeder
{
    public function run(): void
    {
        $project = DB::table('projects')->first();

        MaterialMovement::create([
            'id' => Str::uuid(),
            'project_id' => $project->id,
            'material_name' => 'Semen',
            'quantity' => 50,
            'type' => 'in',
            'created_by' => DB::table('users')->first()->id,
        ]);
    }
}

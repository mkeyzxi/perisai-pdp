<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProjectDocument;
use Illuminate\Support\Str;
use illuminate\Support\Facades\DB;
class ProjectDocumentsSeeder extends Seeder
{
    public function run(): void
    {
        $project = DB::table('projects')->first();

        ProjectDocument::create([
            'id' => Str::uuid(),
            'project_id' => $project->id,
            'file_path' => 'documents/kontrak.pdf',
            'file_type' => 'pdf',
            'uploaded_by' => DB::table('users')->first()->id,
        ]);
    }
}

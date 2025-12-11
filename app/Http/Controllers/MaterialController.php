<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\MaterialMovement;

class MaterialController extends Controller
{
    // Halaman form upload/input
    public function upload()
    {
        $projects = Project::all();
        $materials = MaterialMovement::all();
        return view('konstruksi.material.upload', compact(['projects', 'materials']));
    }

    // Simpan material
    public function store(Request $request)
    {
        $validated = $request->validate([
            'project_id' => 'required|exists:projects,id',
            'document_no' => 'nullable|string',
            'posting_date' => 'nullable|date',
            'unloading_point' => 'nullable|string',
            'ref_doc_no' => 'nullable|string',
            'sap_material_code' => 'nullable|string',
            'material_description' => 'nullable|string',
            'uom' => 'nullable|string',
            'quantity_out' => 'nullable|numeric',
            'val_currency' => 'nullable|string',
            'header_text' => 'nullable|string',
            'cost_element' => 'nullable|string',
            'wbs_element' => 'nullable|string',
        ]);


        MaterialMovement::create($validated);

        return back()->with('success', 'Material berhasil disimpan.');
    }

    // API untuk auto-fill data project
    public function getProjectData($id)
    {
        $project = Project::findOrFail($id);

        return response()->json([
            'spk_number'       => $project->spk_number,
            'wbs_number'       => $project->wbs_number,
            'contract_name'    => $project->contract_name,
            'vendor_name'      => $project->vendor_name,
            'region'           => $project->region,
            'contract_value'   => $project->contract_value,
            'start_date'       => $project->start_date,
            'end_date'         => $project->end_date,
            'bastp_date'       => $project->bastp_date,
            'progress'         => $project->progress_percentage,
            'status'           => $project->status
        ]);
    }
}

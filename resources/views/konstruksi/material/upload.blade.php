@extends('layouts.app')

@section('content')
    <div class="mx-auto mt-6 max-w-4xl rounded-xl bg-white p-6 shadow-lg">

        <h2 class="mb-6 text-2xl font-semibold text-[#5A67BA]">Input Material Keluar</h2>

        <form action="{{ route('konstruksi.material.store') }}" method="POST">
            @csrf

            {{-- PILIH SPK --}}
            <div class="mb-4">
                <label class="font-medium text-gray-700">Nomor SPBJ / SPK</label>
                <select id="projectSelect" name="project_id" class="w-full rounded-md border p-2">
                    <option value="">-- Pilih SPK --</option>
                    @foreach ($projects as $p)
                        <option value="{{ $p->id }}">{{ $p->spk_number }}</option>
                    @endforeach
                </select>
            </div>

            {{-- WBS otomatis --}}
            <div class="mb-4">
                <label class="font-medium text-gray-700">Nomor WBS</label>

                <input type="text" id="wbs_number" name="wbs_number" class="w-full rounded-md border bg-gray-100 p-2"
                    readonly>

            </div>

            {{-- INPUT MANUAL DATA PROJECT --}}
            <div class="grid grid-cols-2 gap-4">

                <div>
                    <label class="font-medium text-gray-700">Judul Pekerjaan</label>
                    <input type="text" id="contract_name" name="contract_name" class="w-full rounded-md border p-2">
                </div>

                <div>
                    <label class="font-medium text-gray-700">Nama Vendor</label>
                    <input type="text" id="vendor_name" name="vendor_name" class="w-full rounded-md border p-2">
                </div>

                <div>
                    <label class="font-medium text-gray-700">Lokasi</label>
                    <input type="text" id="region" name="region" class="w-full rounded-md border p-2">
                </div>

                <div>
                    <label class="font-medium text-gray-700">Nilai Kontrak</label>
                    <input type="number" id="contract_value" name="contract_value" class="w-full rounded-md border p-2">
                </div>

                <div>
                    <label class="font-medium text-gray-700">Tanggal Kontrak</label>
                    <input type="date" id="start_date" name="start_date" class="w-full rounded-md border p-2">
                </div>

                <div>
                    <label class="font-medium text-gray-700">Tanggal Selesai</label>
                    <input type="date" id="end_date" name="end_date" class="w-full rounded-md border p-2">
                </div>

                <div>
                    <label class="font-medium text-gray-700">Tanggal BASTP</label>
                    <input type="date" id="bastp_date" name="bastp_date" class="w-full rounded-md border p-2">
                </div>

            </div>
			
            <hr class="my-6">

            INPUT MATERIAL
        <div class="grid grid-cols-2 gap-4">

            <div>
                <label class="font-medium text-gray-700">Document No</label>
                <input type="text" name="document_no" class="w-full border rounded-md p-2">
            </div>

            <div>
                <label class="font-medium text-gray-700">Posting Date</label>
                <input type="date" name="posting_date" class="w-full border rounded-md p-2">
            </div>

            <div>
                <label class="font-medium text-gray-700">Unloading Point</label>
                <input type="text" name="unloading_point" class="w-full border rounded-md p-2">
            </div>

            <div>
                <label class="font-medium text-gray-700">Ref Doc No</label>
                <input type="text" name="ref_doc_no" class="w-full border rounded-md p-2">
            </div>

            <div>
                <label class="font-medium text-gray-700">SAP Material Code</label>
                <input type="text" name="sap_material_code" class="w-full border rounded-md p-2">
            </div>

            <div>
                <label class="font-medium text-gray-700">Material Description</label>
                <input type="text" name="material_description" class="w-full border rounded-md p-2">
            </div>

            <div>
                <label class="font-medium text-gray-700">UOM</label>
                <input type="text" name="uom" class="w-full border rounded-md p-2">
            </div>

            <div>
                <label class="font-medium text-gray-700">Quantity Out</label>
                <input type="number" step="any" name="quantity_out" class="w-full border rounded-md p-2">
            </div>

            <div>
                <label class="font-medium text-gray-700">Val Currency</label>
                <input type="number" step="any" name="val_currency" class="w-full border rounded-md p-2">
            </div>

            <div>
                <label class="font-medium text-gray-700">Header Text</label>
                <input type="text" name="header_text" class="w-full border rounded-md p-2">
            </div>

            <div>
                <label class="font-medium text-gray-700">Cost Element</label>
                <input type="text" name="cost_element" class="w-full border rounded-md p-2">
            </div>

            <div>
                <label class="font-medium text-gray-700">WBS Element</label>
                <input type="text" name="wbs_element" class="w-full border rounded-md p-2">
            </div>
        </div>
            <div class="rounded-xl border border-gray-100 shadow-sm">
                <table class="min-w-full py-5 text-sm">
                    <thead>
                        <tr class="bg-white">
                            <th class="px-6 py-4 text-center font-medium text-gray-500">No</th>
                            <th class="px-6 py-4 text-center font-medium text-gray-500">Tanggal Input PDP</th>
                            <th class="px-6 py-4 text-center font-medium text-gray-500">Reff Dokumen</th>
                            <th class="px-6 py-4 text-center font-medium text-gray-500">Nomor Material</th>
                            <th class="px-6 py-4 text-center font-medium text-gray-500">Nama Material/Jasa</th>
                            <th class="px-6 py-4 text-center font-medium text-gray-500">Actions</th>

                        </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-100">
                        @foreach ($materials as $material)
                            <tr>
                                <td class="px-4 py-2 text-center font-medium text-gray-500">{{ $loop->iteration }}</td>
                                <td class="px-4 py-2 text-center font-medium text-gray-500">{{ $material->posting_date }}
                                </td>
                                <td class="px-4 py-2 text-center font-medium text-gray-500">{{ $material->ref_doc_no }}</td>
                                <td class="px-4 py-2 text-center font-medium text-gray-500">
                                    {{ $material->sap_material_code }}</td>
                                <td class="px-4 py-2 text-center font-medium text-gray-500">
                                    {{ $material->material_description }}</td>

                                <td class="text-center">
                                    {{-- <a href="{{ route('projects.show', $project->id) }}" class="text-blue-600"> --}}
                                    Detail
                                    {{-- </a> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <button class="mt-6 rounded-md bg-[#5A67BA] px-4 py-2 text-white hover:bg-[#707FDD]">
                Simpan Material
            </button>

        </form>
    </div>

    <script>
        // konstruksi -> material -> upload
        document.getElementById('projectSelect').addEventListener('change', function() {
            let id = this.value;
            if (!id) return;

            fetch("{{ url('/konstruksi/material/project') }}/" + id)
                .then(res => res.json())
                .then(data => {
                    console.log(data); // cek dulu datanya tampil
                    document.getElementById('wbs_number').value = data.wbs_number;
                    // document.getElementById('contract_name').value = data.contract_name;
                    // document.getElementById('vendor_name').value = data.vendor_name;
                    // document.getElementById('region').value = data.region;
                    // document.getElementById('contract_value').value = data.contract_value;
                    // document.getElementById('start_date').value = data.start_date;
                    // document.getElementById('end_date').value = data.end_date;
                    // document.getElementById('bastp_date').value = data.bastp_date;
                });
        });
    </script>
@endsection

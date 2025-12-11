@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-semibold text-[#5A67BA]">Dashboard</h1>

    <p class="mt-3 text-gray-600 ">
        Selamat datang di sistem Perisal-PDP.
    {{-- <div class="overflow-x-auto rounded-xl border border-gray-100 shadow-sm"> --}}
    <div class=" rounded-xl border border-gray-100 shadow-sm">
        <table class="min-w-full text-sm py-5">
            <thead>
                <tr class="bg-white">
                    <th class="px-6 py-4 text-center font-medium text-gray-500">No</th>
                    <th class="px-6 py-4 text-center font-medium text-gray-500">Nomor SPBJ/SPK</th>
                    <th class="px-6 py-4 text-center font-medium text-gray-500">Nomor WBS</th>
                    <th class="px-6 py-4 text-center font-medium text-gray-500">Nama Rekanan</th>
                    <th class="px-6 py-4 text-center font-medium text-gray-500">Judul Pekerjaan</th>
                    <th class="px-6 py-4 text-center font-medium text-gray-500">Status</th>
                    <th class="px-6 py-4 text-center font-medium text-gray-500">Actions</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-100">
                @foreach ($projects as $project)
                    <tr>
                        <td class="px-4 py-2 text-center font-medium text-gray-500 ">{{ $loop->iteration }}</td>
                        <td class="px-4 py-2 text-center font-medium text-gray-500">{{ $project->spk_number }}</td>
                        <td class="px-4 py-2 text-center font-medium text-gray-500">{{ $project->wbs_number }}</td>
                        <td class="px-4 py-2 text-center font-medium text-gray-500">{{ $project->vendor_name }}</td>
                        <td class="px-4 py-2 text-center font-medium text-gray-500">{{ $project->contract_name }}</td>
                        <td class="px-4 py-2 text-center font-medium text-gray-500">
                            <span class="rounded-full bg-blue-100 px-3 py-1 text-xs text-blue-600">
                                {{ $project->status }}
                            </span>
                        </td>
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

    </p>
@endsection

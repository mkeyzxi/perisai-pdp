@php
    $role = auth()->user()->role ?? '';

    $uploadMaterialRoute = match ($role) {
        'admin' => route('admin.material.upload'),
        'konstruksi' => route('konstruksi.material.upload'),
        'akuntansi' => route('akuntansi.material.upload'),
        default => '#',
    };
@endphp


<div class="min-h-screen w-64 bg-[#F5F6FA] p-6">

    <!-- Logo / Brand -->
    <div class="mb-10 flex items-center gap-3">
        <div class="flex h-10 w-10 items-center justify-center rounded-full bg-[#5A67BA] text-lg font-bold text-white">
            P
        </div>
        <span class="text-lg font-semibold text-[#5A67BA]">Perisal PDP</span>
    </div>

    <!-- Menu Title -->
    <p class="mb-4 text-xs font-semibold text-[#A6ABC8]">MENU</p>

    <!-- Menu List -->
    <nav class="flex flex-col gap-2">

        <!-- Dashboard (Active) -->
        <a href="#" class="flex items-center gap-3 rounded-md bg-[#E8E9F8] px-4 py-2 font-medium text-[#5A67BA]">
            <!-- Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                    d="M3 12l2-2m0 0l7-7 7 7m-9 9v-6h4v6m5-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            Dashboard
        </a>

        <!-- Upload Material Keluar -->
        <a href="{{ $uploadMaterialRoute }}"
            class="{{ request()->url() === $uploadMaterialRoute ? 'bg-[#F0F1FF] text-[#707FDD]' : 'text-[#A6ABC8]' }} flex items-center gap-3 rounded-md px-4 py-2 transition hover:bg-[#F0F1FF] hover:text-[#707FDD]">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                    d="M8 16h8m-8-4h8m-8-4h8M4 6h16M4 6v12a2 2 0 002 2h12a2 2 0 002-2V6" />
            </svg>
            Upload Material Keluar
        </a>

        <!-- Rekonsiliasi Data -->
        <a href="#"
            class="flex items-center gap-3 rounded-md px-4 py-2 text-[#A6ABC8] transition hover:bg-[#F0F1FF] hover:text-[#707FDD]">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                    d="M4 6h16M4 10h16M4 14h16M4 18h16" />
            </svg>
            Rekonsiliasi Data
        </a>

        <!-- Logout -->
        <a href={{ route('logout') }}
            class="mt-4 flex items-center gap-3 rounded-md px-4 py-2 text-[#A6ABC8] transition hover:text-red-500">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h6a2 2 0 012 2v1" />
            </svg>
            Log Out
        </a>
    </nav>

</div>

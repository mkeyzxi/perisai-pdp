
<nav class="w-full bg-white shadow-sm h-14 flex items-center px-6">
    <div class="flex-1 font-semibold text-gray-700">
        {{ $title ?? 'Dashboard' }}
    </div>

    <div class="flex items-center gap-3">
        <span class="text-gray-600">{{ Auth::user()->username ?? 'Guest' }}</span>
        <div class="w-8 h-8 rounded-full bg-[#5A67BA] text-white flex items-center justify-center">
            {{ strtoupper(substr(Auth::user()->username ?? 'G', 0, 1)) }}
        </div>
    </div>
</nav>

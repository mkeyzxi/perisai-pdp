<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Perisal-PDP</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-inter flex h-screen overflow-hidden">
    <!-- Left Image -->
    <div class="w-1/2 bg-cover bg-center"
        style="background-image: url('/img/login-image.png');"></div>

    <!-- Right Side -->
    <div class="flex w-1/2 items-center justify-center bg-white">
        <div class="w-80 max-w-sm text-center">

            <!-- Logo -->
            <div class="mb-6 flex justify-start">
				<div class="flex h-12 w-12 items-start justify-start rounded-full text-3xl font-bold text-purple-700">
					<img src="/img/login-logo.png" alt="Logo PERISAI"></div>
			</div>

            <h1 class="mb-1 text-2xl font-semibold text-gray-700">Selamat Datang Perisal-PDP</h1>
            <p class="mb-6 text-sm text-gray-400">Login Admin, Akutansi, Konstruksi</p>

            <form action="{{ route('login.post') }}" method="POST">
    @csrf

    <div class="mb-4 text-left">
        <label class="text-sm font-medium text-gray-700">Email</label>
        <input type="email" name="email" placeholder="masukkan email"
            class="mt-1 w-full rounded-md border px-3 py-2 outline-none focus:ring-2 focus:ring-indigo-500">
    </div>

    <div class="mb-2 text-left">
        <label class="text-sm font-medium text-gray-700">Password</label>
        <input type="password" name="password" placeholder="masukkan password"
            class="mt-1 w-full rounded-md border px-3 py-2 outline-none focus:ring-2 focus:ring-indigo-500">
    </div>

    @if(session('error'))
        <p class="text-red-500 text-sm mb-4">{{ session('error') }}</p>
    @endif

    <button
        class="w-full rounded-md bg-indigo-600 py-2 text-lg font-medium text-white hover:bg-indigo-700">
        Login
    </button>
</form>

    </div>
</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Login|Mentor</title>
</head>
<body>
    {{-- Navbar --}}
    <div class="bg-red-base flex px-10 py-5 items-center justify-between">
        <div class="flex gap-1 items-center border-2 border-white p-2 rounded-xl">
            <img class="scale-75" src="./images/back-ico.svg" alt="#">
            <p class="text-white font-medium">Kembali</p>
        </div>
        <h1 class="text-white text-3xl font-bold">FitMentor</h1>
        <div class="flex gap-1 items-center opacity-0">
            <img class="scale-75" src="./images/back-ico.svg" alt="#">
            <p class="text-white font-medium">Kembali</p>
        </div>
    </div>
    {{-- Konten --}}
    <h1 class="mt-10 text-center text-4xl font-bold text-red-base">Login User</h1>
    <form action="/loginUser" method="POST" class="mx-36 mt-10 flex flex-col gap-5 border-2 border-red-base p-5 rounded-xl">
        @csrf
        <div class="flex flex-col gap-2">
            <label for="email" class="text-lg font-semibold">Email</label>
            <input type="text" name="email" value="{{ old('email') }}" class="border rounded-lg p-2 " placeholder="your email" required>
            @error('email')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="flex flex-col gap-2">
            <label for="password" class="text-lg font-semibold">Password</label>
            <input type="password" name="password" value="" class="border rounded-lg p-2" placeholder="password here..." required>
        </div>
        @if(session('error'))
            <p class="text-red-500 text-center">{{ session('error') }}</p>
        @endif
        <button type="submit" class="text-2xl text-white bg-red-base rounded-xl font-semibold py-4">Login</button>
    </form>
</body>
</html>
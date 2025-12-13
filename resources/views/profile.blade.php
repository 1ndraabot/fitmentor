<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Profile</title>
</head>
<body>
    {{-- Navbar --}}
    <div class="min-h-[177px] w-full bg-red-base flex justify-between items-center px-40">
        <div class="flex flex-col items-center">
            <h1 class="font-montserrat font-bold text-[64px]  text-white">FitMentor</h1>
            <h1 class="font-platypi font-medium text-[22px] text-white">Your Personal Fitness Mentor.</h1>
        </div>
        <div class="flex gap-10">
            <a href="#" class="text-white font-medium">Beranda</a>
            <a href="#" class="text-white font-medium">Dashboard Saya</a>
            <a href="#" class="text-white font-medium">Riwayat</a>
            <button class="flex gap-2 h-fit px-6 py-2 border bg-white rounded-lg text-red-base font-medium">
                <img src="#" alt="Profile">
                <p class="text-red-base font-medium">User</p>
            </button>
        </div>
    </div>
    {{-- Konten --}}
    <form action="" class="mx-36 mt-10 p-5 border rounded-xl flex flex-col gap-4">
        <img src="#" alt="#">
        <div class="flex flex-col gap-2">
            <label for="nama" class="text-lg font-semibold">Nama Lengkap</label>
            <input type="text" value="" class="border rounded-lg p-2">
        </div>
        <div class="flex flex-col gap-2">
            <label for="nama" class="text-lg font-semibold">Email</label>
            <input type="text" value="" class="border rounded-lg p-2">
        </div>
        <div class="flex flex-col gap-2">
            <label for="nama" class="text-lg font-semibold">Number Phone</label>
            <input type="text" value="" class="border rounded-lg p-2">
        </div>
        <div class="flex flex-col gap-2">
            <label for="nama" class="text-lg font-semibold">Umur</label>
            <input type="text" value="" class="border rounded-lg p-2">
        </div>
        <button action="submit" class="text-xl font-bold rounded-xl bg-red-base text-white py-3">Simpan</button>
    </form>
</body>
</html>
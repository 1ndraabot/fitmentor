<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Cari Mentor</title>
</head>
<body class="font-poppins">
    {{-- Navbar --}}
    <div class="min-h-[177px] w-full bg-red-base flex justify-between items-center px-40">
        <div class="flex flex-col items-center">
            <h1 class="font-montserrat font-bold text-[64px]  text-white">FitMentor</h1>
            <h1 class="font-platypi font-medium text-[22px] text-white">Your Personal Fitness Mentor.</h1>
        </div>
        <div class="flex gap-10">
            <a href="#" class="h-fit px-6 py-1 bg-white rounded-full text-red-base font-medium">Beranda</a>
            <a href="#" class="text-white font-medium">Dashboard Saya</a>
            <a href="#" class="text-white font-medium">Riwayat</a>
            <button class="flex gap-2">
                <img src="#" alt="Profile">
                <p class="text-white font-medium">User</p>
            </button>
        </div>
    </div>
    {{-- Headline --}}
    <h1 class="text-[64px] text-red-base text-center font-semibold">Temukan Mentor Olahraga Terbaik</h1>
    <h2 class="text-2xl text-center">Tingkatkan performa olahraga anda dengan mentor profesional</h2>
    {{-- Search --}}
    <div class="w-full flex flex-col gap-5 items-center pt-10">
        <form action="/search" method="GET" class="w-1/2 search-form border border-gray-400 py-2 px-5 rounded-full">
            <input type="text" name="q" placeholder="Cari sesuatu di sini..." aria-label="Kolom Pencarian" class="search-input">
        </form>
        <div class="font-semibold flex gap-5">
            <a href="#" class="bg-red-base px-4 py-2 text-white rounded-full">Semua</a>
            <a href="#" class="border-2 border-red-base px-4 py-2 text-red-base rounded-full">Fitness</a>
            <a href="#" class="border-2 border-red-base px-4 py-2 text-red-base rounded-full">Yoga</a>
            <a href="#" class="border-2 border-red-base px-4 py-2 text-red-base rounded-full">Sepak Bola</a>
            <a href="#" class="border-2 border-red-base px-4 py-2 text-red-base rounded-full">Basket</a>
            <a href="#" class="border-2 border-red-base px-4 py-2 text-red-base rounded-full">Renang</a>
            <a href="#" class="border-2 border-red-base px-4 py-2 text-red-base rounded-full">Lari</a>
        </div>
    </div>
    {{-- Mentor --}}
    <div class="mt-10 border-4 border-red-base mx-36 rounded-2xl">
        <div class="flex py-10">
            <img src="#" alt="#">
            <div class="flex flex-col w-full px-10 gap-5">
                <div class="flex justify-between">
                    <div class="flex flex-col">
                        <h2 class="font-semibold text-[26px]">Nama</h2>
                        <p class="text-xl text-gray-500">Spesialisasi</p>
                        <div class="flex">
                            <div class="flex">
                                <img src="#" alt="Rating">
                                <p class="text-[18px] text-gray-500">4.9</p>
                            </div>
                            <div class="flex">
                                <img src="#" alt="Time">
                                <p class="text-[18px] text-gray-500">1 Bulan</p>
                            </div>
                            <div class="flex">
                                <img src="#" alt="Session">
                                <p class="text-[18px] text-gray-500">10 Sesi</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col items-end">
                        <h2 class="text-[26px] text-red-base font-bold">Rp. 200.000</h2>
                        <p class="text-[12px] text-gray-500">/Sesi</p>
                    </div>
                </div>
                <a href="#" class="w-full py-4 rounded-xl bg-red-base font-bold text-white text-center">Lihat Detail & Booking</a>
            </div>
        </div>
    </div>
</body>
</html>
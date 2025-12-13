<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Home</title>
</head>
<body>
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
    {{-- Selection --}}
    <div class="mt-10 mx-36 flex border-2 border-red-base rounded-xl font-semibold text-red-base text-[32px]">
        <div class="py-4 w-full flex gap-4 justify-center items-center">
            <svg stroke="#FFFFFF" width="47" height="43" viewBox="0 0 47 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2.5 2.5H15C17.2101 2.5 19.3298 3.37797 20.8926 4.94078C22.4554 6.50358 23.3333 8.6232 23.3333 10.8333V40C23.3333 38.3424 22.6749 36.7527 21.5028 35.5806C20.3307 34.4085 18.7409 33.75 17.0833 33.75H2.5V2.5Z" stroke="#2B2B2B" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M44.1667 2.5H31.6667C29.4565 2.5 27.3369 3.37797 25.7741 4.94078C24.2113 6.50358 23.3333 8.6232 23.3333 10.8333V40C23.3333 38.3424 23.9918 36.7527 25.1639 35.5806C26.336 34.4085 27.9257 33.75 29.5833 33.75H44.1667V2.5Z" stroke="#2B2B2B" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <a href="#">Program Saya</a>
        </div>
        <div class="py-4 w-full flex gap-4 justify-center items-center">
            <img src="./images/peoples-ico.svg" alt="#">
            <a href="#">Mentor Saya</a>
        </div>
    </div>
    {{-- Konten --}}
    <div class="mt-10 mx-36 py-5 flex flex-col gap-5">
        <div class="w-full flex flex-col gap-2 pb-8 items-center border-b">
            <img src="#" alt="#">
            <h1 class="font-bold text-[30px]">Nama</h1>
            <p class=" text-gray-400">Spesialisasi</p>
            <div class="flex gap-4">
                <img src="#" alt="#">
                <p class="font-semibold text-gray-600">4.9</p>
            </div>
        </div>
        <div class="flex flex-col gap-3">
            <div class="flex justify-between">
                <p class="text-xl text-gray-500">Pengalaman</p>
                <p class="text-xl font-semibold text-gray-500">5 Tahun</p>
            </div>
            <div class="flex justify-between">
                <p class="text-xl text-gray-500">Total Klien</p>
                <p class="text-xl font-semibold text-gray-500">38</p>
            </div>
            <div class="flex justify-between">
                <p class="text-xl text-gray-500">Jumlah Gigs</p>
                <p class="text-xl font-semibold text-gray-500">3</p>
            </div>
        </div>
        <div class="flex gap-10 font-semibold text-2xl">
            <a href="#" class="w-full py-3 text-center text-white rounded-2xl bg-red-base">Lanjutkan Program</a>
            <a href="#" class="w-full py-3 text-center text-red-base rounded-2xl border-4 border-red-base">Lihat Gigs</a>
        </div>
    </div>
</body>
</html>
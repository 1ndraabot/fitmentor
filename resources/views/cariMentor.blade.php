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
            {{-- <a href="#" class="h-fit px-6 py-1 bg-white rounded-full text-red-base font-medium">Beranda</a> --}}
            <a href="#" class="text-white font-medium">Dashboard Saya</a>
            <a href="/riwayat" class="text-white font-medium">Riwayat</a>
            <button class="flex gap-2">
                <img src="#" alt="Profile">
                <p class="text-white font-medium">{{ session('nama_user') }}</p>
            </button>
        </div>
    </div>
    {{-- Headline --}}
    <h1 class="text-[64px] text-red-base text-center font-semibold">Temukan Mentor Olahraga Terbaik</h1>
    <h2 class="text-2xl text-center">Tingkatkan performa olahraga anda dengan mentor profesional</h2>
    {{-- Search --}}
    <div class="w-full flex flex-col gap-5 items-center pt-10">
        <form action="{{ route('cariMentor') }}" method="GET" class="w-1/2 search-form border border-gray-400 py-2 px-5 rounded-full">
            <input type="text" value="{{ old('q', $query ?? '') }}" name="q" placeholder="Cari sesuatu di sini..." aria-label="Kolom Pencarian" class="search-input">
        </form>
        <div class="font-semibold flex gap-5">
            <a href="{{ route('cariMentor') }}" class="bg-red-base px-4 py-2 text-white rounded-full">Semua</a>
            <a href="{{ route('cariMentor', ['kategori' => 'fitness']) }}" class="border-2 border-red-base px-4 py-2 text-red-base rounded-full">Fitness</a>
            <a href="{{ route('cariMentor', ['kategori' => 'yoga']) }}" class="border-2 border-red-base px-4 py-2 text-red-base rounded-full">Yoga</a>
            <a href="{{ route('cariMentor', ['kategori' => 'sepakbola']) }}" class="border-2 border-red-base px-4 py-2 text-red-base rounded-full">Sepak Bola</a>
            <a href="{{ route('cariMentor', ['kategori' => 'basket']) }}" class="border-2 border-red-base px-4 py-2 text-red-base rounded-full">Basket</a>
            <a href="{{ route('cariMentor', ['kategori' => 'renang']) }}" class="border-2 border-red-base px-4 py-2 text-red-base rounded-full">Renang</a>
            <a href="{{ route('cariMentor', ['kategori' => 'lari']) }}" class="border-2 border-red-base px-4 py-2 text-red-base rounded-full">Lari</a>
        </div>
    </div>
    {{-- Mentor --}}
    @foreach ($mentors as $mentor)
        <div class="mt-10 border-4 border-red-base mx-36 rounded-2xl">
            <div class="flex py-10">
                <div class="flex flex-col w-full px-10 gap-5">
                    <div class="flex justify-between">
                        <div class="flex flex-col gap-2">
                            <h2 class="font-semibold text-[26px]">{{ $mentor->nama_gig }}</h2>
                            <p>{{ $mentor->deskripsi_gig }}</p>
                            <div class="flex gap-5">
                                {{-- <h2 class="font-semibold text-[26px]">{{ $mentor->nama_mentor }}</h2> --}}
                                <p class="font-semibold text-gray-500">{{ $mentor->nama_mentor }}</p>
                                <p class=" text-gray-500">{{ $mentor->kategori }}</p>
                            </div>
                            {{-- <div class="flex">
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
                            </div> --}}
                        </div>
                        <div class="flex flex-col items-end">
                            <h2 class="text-[26px] text-red-base font-bold">Rp. {{ $mentor->harga_gig }}</h2>
                            <p class="text-[12px] text-gray-500">/Sesi</p>
                        </div>
                    </div>
                    <a href="{{ route('booking.show', $mentor->id_gigs) }}" class="w-full py-4 rounded-xl bg-red-base font-bold text-white text-center">Lihat Detail & Booking</a>
                </div>
            </div>
        </div>
    @endforeach
</body>
</html>
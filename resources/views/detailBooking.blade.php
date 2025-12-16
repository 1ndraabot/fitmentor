<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Detail Booking</title>
</head>
<body>

{{-- Navbar --}}
<div class="bg-red-base flex px-10 py-5 items-center justify-between">
    <a href="{{ url()->previous() }}" class="flex gap-1 items-center border-2 border-white p-2 rounded-xl">
        <p class="text-white font-medium">Kembali</p>
    </a>
    <h1 class="text-white text-3xl font-bold">FitMentor</h1>
    <div class="opacity-0">Kembali</div>
</div>

{{-- Headline --}}
<h1 class="text-red-base text-4xl font-bold text-center py-10">
    {{ $gig->judul_gigs }}
</h1>

{{-- Konten --}}
<div class="mx-36 flex flex-col border-4 py-5 rounded-3xl px-10 border-red-base">

    {{-- Info Mentor --}}
    <div class="flex gap-5 py-5 border-b border-gray-400">
        <div class="flex flex-col gap-3">
            <p class="bg-red-base rounded-full py-1 px-4 text-white font-semibold">
                Program
            </p>
        </div>

        <div class="flex flex-col gap-3">
            <h1 class="font-semibold text-2xl">
                {{ $gig->nama_mentor }}
            </h1>

            <h1 class="text-3xl text-white text-center font-semibold bg-red-base rounded-2xl py-3">
                Rp {{ number_format($gig->harga, 0, ',', '.') }}
                <span class="text-lg font-medium">/sesi</span>
            </h1>
        </div>
    </div>

    {{-- Deskripsi --}}
    <div class="flex flex-col gap-5 py-5 border-b border-gray-400">
        <h1 class="text-3xl font-bold">Deskripsi Program</h1>
        <p>{{ $gig->deskripsi }}</p>
    </div>

    {{-- Button Beli --}}
    <a href="{{ route('payment.index', $gig->id_gigs) }}"
       class="text-white bg-red-base py-4 mt-6 text-center font-bold rounded-2xl">
        Beli Sekarang
    </a>

</div>

</body>
</html>

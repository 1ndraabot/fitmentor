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
            <a href="#" class="flex gap-2 h-fit px-6 py-2 border bg-white rounded-lg text-red-base font-medium">Beranda</a>
            <a href="/add-gigs" class="text-white font-medium">Tambah Gigs</a>
            <div class="flex fap-2">
                <img src="#" alt="Profile">
                <a href="" class="text-white font-medium">{{ session('nama_mentor') }}</a>
            </div>
        </div>
    </div>
    {{-- Mentor --}}
    @if(count($gigs) === 0)
        <p>Belum ada gigs</p>
    @else
        @foreach ($gigs as $gig) 
            <div class="mt-10 border-4 border-red-base mx-36 rounded-2xl">
                <div class="flex py-10">
                    <div class="flex flex-col w-full px-10 gap-5">
                        <div class="flex justify-between">
                            <div class="flex flex-col gap-2">
                                <h2 class="font-semibold text-[26px]">{{ $gig->judul_gigs }}</h2>
                                <p>deskripsi</p>
                                <div class="flex gap-5">
                                    {{-- <h2 class="font-semibold text-[26px]">{{ $mentor->nama_mentor }}</h2> --}}
                                    <p class=" text-gray-500">{{ $gig->kategori_olahraga }}</p>
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
                                <h2 class="text-[26px] text-red-base font-bold">Rp. {{ number_format($gig->harga) }}</h2>
                                <p class="text-[12px] text-gray-500">/Sesi</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <a href="{{ route('editGigForm', $gig->id_gigs) }}" class="w-full py-4 rounded-xl bg-red-base font-bold text-white text-center">Edit</a>
                            <form action="{{ route('mentorHome.delete', $gig->id_gigs) }}" method="post" class="w-full flex justify-center py-4 rounded-xl border-4 border-red-base">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Yakin ingin menghapus gigs ini?')" class="font-bold text-red-base">Hapus</button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        @endforeach    
    @endif
</body>
</html>
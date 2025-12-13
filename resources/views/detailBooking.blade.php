<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Detail Pembayaran</title>
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
    {{-- Headline --}}
    <h1 class="text-red-base text-4xl font-bold text-center py-10">Fitness & Gym</h1>
    {{-- Konten --}}
    <div class="mx-36 flex flex-col border-4     rounded-3xl px-10 border-red-base">
        <div class="flex gap-5 py-5 border-b border-gray-400">
            <div class="flex flex-col gap-3">
                <img src="#" alt="#">
                <p class="bg-red-base rounded-full py-1 px-4 text-white font-semibold">Fitness</p>
            </div>
            <div class="flex flex-col gap-3 ">
                <h1 class="font-semibold text-2xl">Nama</h1>
                <p class="text-gray-400 ">Spesialisasi</p>
                <div class="flex gap-5">
                    <div class="flex gap-2">
                        <img src="#" alt="Rating">
                        <p>4.9</p>
                    </div>
                    <div class="flex gap-2">
                        <img src="#" alt="Time">
                        <p>4 Month</p>
                    </div>
                    <div class="flex gap-2">
                        <img src="#" alt="Session">
                        <p>6 Sesi</p>
                    </div>
                </div>
                <h1 class="text-3xl text-white text-center font-semibold bg-red-base rounded-2xl py-3">Rp 220.000<span class="text-lg font-medium">/sesi</span></h1>
            </div>
        </div>
        <div class="flex flex-col gap-5 py-5 border-b border-gray-400">
            <h1 class="text-3xl font-bold">Deskripsi Program</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia doloremque mollitia vel? Nobis quaerat iste corporis adipisci recusandae eligendi similique ducimus, consectetur id culpa officiis voluptas, itaque, laborum laudantium libero!</p>
        </div>
        <div class="flex flex-col gap-5 py-5 border-b border-gray-400">
            <h1 class="text-3xl font-bold">Yang anda dapatkan</h1>
            <div class="flex gap-2">
                <img src="#" alt="#">
                <p>Sesi latihan 120 menit</p>
            </div>
            <div class="flex gap-2">
                <img src="#" alt="#">
                <p>Konsultasi Program latihan personal</p>
            </div>
            <div class="flex gap-2">
                <img src="#" alt="#">
                <p>Panduan latihan mandiri</p>
            </div>
            <div class="flex gap-2">
                <img src="#" alt="#">
                <p>Follow-up via chat/WhatsApp</p>
            </div>
        </div>
    </div>
</body>
</html>
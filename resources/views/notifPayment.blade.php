<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Pembayaran</title>
</head>
<body>
    {{-- Navbar --}}
    <div class="bg-red-base flex px-10 py-5 items-center justify-between">
        <h1 class="text-white text-3xl font-bold">FitMentor</h1>
    </div>
    {{-- Konten --}}
    <div class="mx-36 mt-10 flex flex-col gap-5">
        <div class="border-4 border-red-base rounded-3xl p-10 flex flex-col items-center gap-3">
            <img src="./images/check-pay-ico.svg" alt="check">
            <h1 class="font-bold text-3xl">Pembayaran Berhasil!</h1>
            <p class="text-lg text-gray-400">Pesanan Anda telah dikonfirmasi. Mentor akan segera menghubungi Anda untuk membahas program latihan.</p>
        </div>
        <a href="#" class="border-4 border-red-base rounded-2xl text-center text-2xl font-semibold text-red-base p-3">Hubungi Mentor</a>
        <a href="#" class="bg-red-base rounded-2xl text-center text-2xl font-semibold text-white p-3">Kembali ke Beranda</a>
    </div>
</body>
</html>
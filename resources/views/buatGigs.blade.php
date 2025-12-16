<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Tambah Gigs</title>
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
    <form action="{{ route('addGigStore') }}" method="POST" class="mx-36 mt-10 flex flex-col gap-5 border-2 border-red-base p-5 rounded-xl">
        @csrf
        <div class="flex flex-col gap-2">
            <label for="judul" class="text-lg font-semibold">Judul Gigs</label>
            <input type="text" name="judul_gigs" class="border rounded-lg p-2" placeholder="Cotoh: Personal Training - Fitness & Gym">
        </div>
        <div class="flex flex-col gap-2">
            <label for="kategori" class="text-lg font-semibold">Kategori Olahraga</label>
            <select name="kategori_olahraga" id="kategori" class="border rounded-lg p-2">
                <option value="" disabled selected>Pilih Kategori</option>
                <option value="fitness">Fitness & Gym</option>
                <option value="yoga">Yoga</option>
                <option value="renang">Berenang</option>
                <option value="sepakbola">Sepak Bola</option>
                <option value="basket">Basket</option>
                <option value="lari">Lari</option>
            </select>
        </div>
        <div class="flex flex-col gap-2">
            <label for="durasi" class="text-lg font-semibold">Durasi Program</label>
            <input type="number" name="durasi" value="" class="border rounded-lg p-2" placeholder="Contoh: 30 hari">
        </div>
        <div class="flex flex-col gap-2">
            <label for="durasi" class="text-lg font-semibold">Harga</label>
            <input type="number" name="harga" value="" class="border rounded-lg p-2" placeholder="200.000">
        </div>
        <div class="flex flex-col gap-2">
            <label for="deskripsi" class="text-lg font-semibold">Deskripsi Program</label>
            <textarea name="deskripsi" name="deskripsi" id="deskripsi" rows="5" class="resize-none border rounded-lg p-2" placeholder="Jelaskan detail Program, target peserta, manfaat, dan apa yang akan dipelajari..."></textarea>
        </div>
        <button type="submit" class="text-2xl text-white bg-red-base rounded-xl font-semibold py-4">Publikasikan</button>
    </form>
</body>
</html>
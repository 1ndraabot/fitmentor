<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Edit Gigs</title>
</head>
<body>

{{-- Navbar --}}
<div class="bg-red-base flex px-10 py-5 items-center justify-between">
    <a href="{{ route('mentorHome') }}" class="flex gap-1 items-center border-2 border-white p-2 rounded-xl">
        <img class="scale-75" src="/images/back-ico.svg" alt="#">
        <p class="text-white font-medium">Kembali</p>
    </a>
    <h1 class="text-white text-3xl font-bold">FitMentor</h1>
    <div class="opacity-0">dummy</div>
</div>

{{-- Konten --}}
<form action="{{ route('editGigUpdate', $gig->id_gigs) }}"
      method="POST"
      class="mx-36 mt-10 flex flex-col gap-5 border-2 border-red-base p-5 rounded-xl">
    @csrf
    @method('PUT')

    <div class="flex flex-col gap-2">
        <label class="text-lg font-semibold">Judul Gigs</label>
        <input type="text" name="judul_gigs"
               value="{{ old('judul_gigs', $gig->judul_gigs) }}"
               class="border rounded-lg p-2">
    </div>

    <div class="flex flex-col gap-2">
        <label class="text-lg font-semibold">Kategori Olahraga</label>
        <select name="kategori_olahraga" class="border rounded-lg p-2">
            <option value="fitness" {{ $gig->kategori_olahraga == 'fitness' ? 'selected' : '' }}>Fitness & Gym</option>
            <option value="yoga" {{ $gig->kategori_olahraga == 'yoga' ? 'selected' : '' }}>Yoga</option>
            <option value="renang" {{ $gig->kategori_olahraga == 'renang' ? 'selected' : '' }}>Berenang</option>
            <option value="sepakbola" {{ $gig->kategori_olahraga == 'sepakbola' ? 'selected' : '' }}>Sepak Bola</option>
            <option value="basket" {{ $gig->kategori_olahraga == 'basket' ? 'selected' : '' }}>Basket</option>
            <option value="lari" {{ $gig->kategori_olahraga == 'lari' ? 'selected' : '' }}>Lari</option>
        </select>
    </div>

    <div class="flex flex-col gap-2">
        <label class="text-lg font-semibold">Durasi Program</label>
        <input type="text" name="durasi"
               value="{{ old('durasi', $gig->durasi) }}"
               class="border rounded-lg p-2">
    </div>

    <div class="flex flex-col gap-2">
        <label class="text-lg font-semibold">Harga</label>
        <input type="number" name="harga"
               value="{{ old('harga', $gig->harga) }}"
               class="border rounded-lg p-2">
    </div>

    <div class="flex flex-col gap-2">
        <label class="text-lg font-semibold">Deskripsi Program</label>
        <textarea name="deskripsi" rows="5"
                  class="resize-none border rounded-lg p-2">{{ old('deskripsi', $gig->deskripsi) }}</textarea>
    </div>

    <button type="submit"
            class="text-2xl text-white bg-red-base rounded-xl font-semibold py-4">
        Simpan Perubahan
    </button>
</form>

</body>
</html>

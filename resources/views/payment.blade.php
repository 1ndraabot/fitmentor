<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Payment</title>
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
    <div class="max-w-4xl mx-auto p-8 bg-white shadow-lg rounded-md">
        <h2 class="text-2xl font-semibold text-center mb-6">Pembayaran</h2>

        @if(session('success'))
            <div class="text-green-500 mb-4">{{ session('success') }}</div>
        @endif

        <form action="{{ route('payment.store') }}" method="POST">
            @csrf

            {{-- Metode Pembayaran --}}
            <div class="mb-4">
                <label class="block text-gray-700">Metode Pembayaran</label>
                <div class="mt-2">
                    @foreach ($metode_pembayaran as $metode)
                        <label class="block">
                            <input type="radio"
                                name="metode_pembayaran"
                                value="{{ $metode->id_metode }}"
                                class="mr-2"
                                required>
                            {{ $metode->nama_metode }}
                        </label>
                    @endforeach
                </div>
            </div>

            {{-- Pilih Gigs --}}
            <div class="mb-4">
                <label for="gigs_id" class="block text-gray-700">Pilih Gigs</label>
                <select name="gigs_id" id="gigs_id"
                        class="mt-2 p-2 w-full border border-gray-300 rounded-md"
                        required>
                    @foreach ($gigs as $gig)
                        <option value="{{ $gig->id_gigs }}"
                                data-harga="{{ $gig->harga }}">
                            {{ $gig->judul_gigs }} - Rp {{ number_format($gig->harga, 0, ',', '.') }}
                        </option>
                    @endforeach
                </select>
            </div>

            {{-- Hidden input --}}
            <input type="hidden" name="jumlah_pembayaran" id="jumlah_pembayaran">
            <input type="hidden" name="tanggal" value="{{ date('Y-m-d') }}">

            <button type="submit"
                    class="bg-red-500 text-white py-2 px-6 rounded-md">
                Bayar Sekarang
            </button>
        </form>

        <script>
            const selectGigs = document.getElementById('gigs_id');
            const jumlahInput = document.getElementById('jumlah_pembayaran');

            function updateHarga() {
                const harga = selectGigs.options[selectGigs.selectedIndex].dataset.harga;
                jumlahInput.value = harga;
            }

            selectGigs.addEventListener('change', updateHarga);
            updateHarga(); // set awal
        </script>

    </div> 
</body>
</html>
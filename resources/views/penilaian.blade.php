<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Rating</title>
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
    <form action="" class="mx-36 mt-10 flex flex-col     gap-5">
        @csrf
    
        {{-- <input type="hidden" name="mentor_id" value="{{ $mentor->id }}"/> --}}
        <div class="p-6 bg-white rounded-xl shadow-lg border-2 border-red-base flex flex-col gap-5">
            <div class="flex flex-col items-center gap-1">
                <h1 class="text-3xl text-red-base font-bold">Berikan Penilaian</h1>
                <p class="text-xl text-red-base">Bagaimana Pengalaman Anda dengan Bobby Albern?</p>
            </div>
            <div class="flex flex-col items-center gap-3">
                <h2 class="text-2xl font-semibold">Rating</h2>
                @for ($i = 5; $i >= 1; $i--)
                    <input 
                    type="radio" 
                    id="star{{ $i }}" 
                    name="rating" 
                    value="{{ $i }}" 
                    class="hidden peer/star{{ $i }}" 
                    required
                    >
                    <label 
                    for="star{{ $i }}" 
                    title="{{ $i }} Bintang" 
                    class="cursor-pointer text-3xl transition-colors duration-200 flex gap-3"
                    >
                        <svg 
                        width="32" 
                        height="32" 
                        viewBox="0 0 22 22" 
                        fill="none" 
                        xmlns="http://www.w3.org/2000/svg"
                        >
                            <path d="M11 1L14.09 7.26L21 8.27L16 13.14L17.18 20.02L11 16.77L4.82 20.02L6 13.14L1 8.27L7.91 7.26L11 1Z" stroke="#FACC15" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                @endfor
            </div>
            <div class="flex flex-col">
                <label 
                for="komentar"
                class="text-lg   font-semibold"
                >Komentar anda</label>
                <textarea 
                type="text" 
                name="komentar" 
                id="komentar" 
                rows="5"
                class="border rounded-2xl p-2"
                placeholder="Berikan komentar anda disini..."
                ></textarea>
            </div>
        </div>
        <button
        class="bg-red-base rounded-lg text-white text-xl font-semibold w-full p-3"
        type="submit"
        >
            Submit
        </button>
    </form>
</body>
</html>
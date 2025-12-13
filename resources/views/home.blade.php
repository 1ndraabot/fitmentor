<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Home|Dashboard</title>
</head>
<body class="font-poppins">
    <div class="bg-[url(./images/bg.ico.svg)] bg-red-base bg-cover bg-center flex flex-col items-center py-20 gap-14">
        <div class="flex flex-col items-center">
            <h1 class="font-montserrat font-bold text-9xl text-white">FitMentor</h1>
            <h1 class="font-platypi font-medium text-[64px] text-white">Your Personal Fitness Mentor.</h1>
        </div>
        <div class="flex gap-10">
            <button class="px-[45px] py-5 bg-white rounded-2xl">
                <h2 class="font-medium text-[40px] text-red-base">Cari Mentor</h2>
            </button>
            <button class="px-11 py-5 border-4 border-white rounded-2xl">
                <h2 class="text-white font-medium text-[40px]">Jadi Mentor</h2>
            </button>            
        </div>
    </div>
    <h1 class="text-[45px] font-semibold text-red-base text-center pt-16">Kategori Olahraga</h1>
    <div class=" flex flex-col gap-10 items-center px-32 pt-16">
        <div class="w-[1246px] h-[200px] flex gap-14">
            <div class="w-full h-full py-6 border-4 border-red-base rounded-3xl flex flex-col items-center">
                <img src="./images/fitnes-ico.svg" alt="Fitness">
                <p class="font-medium text-3xl text-red-base">Fitness</p>
            </div>
            <div class="w-full h-full py-6 border-4 border-red-base rounded-3xl flex flex-col items-center">
                <img src="./images/yoga-ico.svg" alt="Yoga">
                <p class="font-medium text-3xl text-red-base">Yoga</p>
            </div>
        </div>
        <div class="w-[1246px] h-[200px] flex gap-14">
            <div class="w-full h-full py-6 border-4 border-red-base rounded-3xl flex flex-col items-center">
                <img src="./images/sepakbola-ico.svg" alt="Sepak Bola">
                <p class="font-medium text-3xl text-red-base">Sepak Bola</p>
            </div>
            <div class="w-full h-full py-6 border-4 border-red-base rounded-3xl flex flex-col items-center">
                <img src="./images/basket-ico.svg" alt="Basket">
                <p class="font-medium text-3xl text-red-base">Basket</p>
            </div>
        </div>
        <div class="w-[1246px] h-[200px] flex gap-14">
            <div class="w-full h-full py-6 border-4 border-red-base rounded-3xl flex flex-col items-center">
                <img src="./images/renang-ico.svg" alt="Berenang">
                <p class="font-medium text-3xl text-red-base">Berenang</p>
            </div>
            <div class="w-full h-full py-6 border-4 border-red-base rounded-3xl flex flex-col items-center">
                <img src="./images/lari-ico.svg" alt="Lari">
                <p class="font-medium text-3xl text-red-base">Lari</p>
            </div>
        </div>
    </div>
</body>
</html>
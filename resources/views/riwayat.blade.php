<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Riwayat</title>
</head>
<body>
    {{-- Navbar --}}
    <div class="min-h-[177px] w-full bg-red-base flex justify-between items-center px-40">
        <div class="flex flex-col items-center">
            <h1 class="font-montserrat font-bold text-[64px]  text-white">FitMentor</h1>
            <h1 class="font-platypi font-medium text-[22px] text-white">Your Personal Fitness Mentor.</h1>
        </div>
        <div class="flex gap-10">
            <a href="#" class="text-white font-medium">Beranda</a>
            <a href="#" class="text-white font-medium">Dashboard Saya</a>
            <a href="#" class="text-white font-medium">Riwayat</a>
            <button class="flex gap-2 h-fit px-6 py-2 border bg-white rounded-lg text-red-base font-medium">
                <img src="#" alt="Profile">
                <p class="text-red-base font-medium">User</p>
            </button>
        </div>
    </div>
    {{-- Konten --}}
    <div class="mx-36 mt-10">
        <h1 class="text-red-base text-3xl font-bold">Riwayat Pembayaran</h1>
        <div class="p-4">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                
                <table class="w-full border-collapse">
                    
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="text-left text-sm font-semibold text-gray-700 p-4 w-1/12">Tanggal</th>
                            <th class="text-left text-sm font-semibold text-gray-700 p-4 w-4/12">Program</th>
                            <th class="text-left text-sm font-semibold text-gray-700 p-4 w-2/12">Mentor</th>
                            <th class="text-left text-sm font-semibold text-gray-700 p-4 w-2/12">Metode</th>
                            <th class="text-right text-sm font-semibold text-gray-700 p-4 w-2/12">Jumlah</th>
                            <th class="text-center text-sm font-semibold text-gray-700 p-4 w-1/12">Status</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        
                        <tr class="border-b hover:bg-gray-50 transition duration-150">
                            <td class="p-4 align-top">
                                <span class="block text-base font-medium text-gray-800">1 Nov</span>
                                <span class="block text-sm text-gray-500">2024</span>
                            </td>
                            <td class="p-4 align-top text-base font-bold text-gray-800">
                                Personal Training - Fitness & Gym
                            </td>
                            <td class="p-4 align-top text-gray-700">Bobby Albern</td>
                            <td class="p-4 align-top text-gray-700">Transfer Bank</td>
                            <td class="p-4 align-top text-right text-red-600 font-bold text-base">
                                Rp 200.000
                            </td>
                            <td class="p-4 align-top">
                                <div class="flex justify-center">
                                    <span class="px-3 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                        Berhasil
                                    </span>
                                </div>
                            </td>
                        </tr>

                        <tr class="border-b bg-gray-50 hover:bg-gray-100 transition duration-150">
                            <td class="p-4 align-top">
                                <span class="block text-base font-medium text-gray-800">1 Nov</span>
                                <span class="block text-sm text-gray-500">2024</span>
                            </td>
                            <td class="p-4 align-top text-base font-bold text-gray-800">
                                Personal Training - Fitness & Gym
                            </td>
                            <td class="p-4 align-top text-gray-700">Bobby Albern</td>
                            <td class="p-4 align-top text-gray-700">Transfer Bank</td>
                            <td class="p-4 align-top text-right text-red-600 font-bold text-base">
                                Rp 200.000
                            </td>
                            <td class="p-4 align-top">
                                <div class="flex justify-center">
                                    <span class="px-3 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                        Berhasil
                                    </span>
                                </div>
                            </td>
                        </tr>

                        <tr class="hover:bg-gray-50 transition duration-150">
                            <td class="p-4 align-top">
                                <span class="block text-base font-medium text-gray-800">1 Nov</span>
                                <span class="block text-sm text-gray-500">2024</span>
                            </td>
                            <td class="p-4 align-top text-base font-bold text-gray-800">
                                Personal Training - Fitness & Gym
                            </td>
                            <td class="p-4 align-top text-gray-700">Bobby Albern</td>
                            <td class="p-4 align-top text-gray-700">Transfer Bank</td>
                            <td class="p-4 align-top text-right text-red-600 font-bold text-base">
                                Rp 200.000
                            </td>
                            <td class="p-4 align-top">
                                <div class="flex justify-center">
                                    <span class="px-3 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                        Berhasil
                                    </span>
                                </div>
                            </td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
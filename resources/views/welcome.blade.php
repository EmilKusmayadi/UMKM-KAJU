<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        {{-- <script src="https://cdn.tailwindcss.com"></script> --}}

    </head>
    <body class="bg-[#F5F5F5]">
        @include('components.nav')

        <main class="px-8">
            <div class="relative mt-8 rounded-2xl overflow-hidden flex justify-center items-center h-screen">
                <img src="{{ asset("image/olivie-strauss.jpg") }}" alt="olive-strauss" class="absolute -scale-x-100">
                <div class="z-10 w-full h-full flex flex-col justify-end p-16 space-y-10">
                    <h1 class="text-7xl font-semibold text-old-gray">Hidrophonik<br>Terbaik</h1>
                    <p class="text-sm text-old-gray w-72">Dengan bangga menawarkan sayuran hidroponik tanpa pestisida</p>
                    <a href="#">
                        <button class="bg-[#345E5C] px-6 py-2 text-white font-light rounded-lg">Selengkapnya</button>
                    </a>
                </div>
            </div>

            <div class="w-full flex justify-between items-center text-2xl my-14">
                <h2>BUNDLE</h2>
                <h2>PROMO</h2>
            </div>

            <div class="w-full flex justify-between items-center">

                <div class="bg-[#E9ECF4] flex justify-center items-end h-64 px-3 py-5 gap-x-8 rounded-2xl">
                    <div class="flex flex-col justify-between h-full">
                        <p class="font-bold">Sayur</p>

                        <div>
                            <h1 class="text-3xl font-normal">Tomat</h1>
                            <p class="font-light">Rp.50000 per kg</p>
                        </div>

                        <a href="#">
                            <button class="bg-[#345E5C] px-6 py-2 text-white font-light rounded-lg text-sm">Beli Sekarang</button>
                        </a>
                    </div>

                    <div class="w-52">
                        <img src="{{ asset('image/cherry-tomato-vegetable-pizza-tomato-png-image-picture-download-1576239854cd1f0dbed9d087d0c87744.png') }}" alt="">
                    </div>
                </div>

                <div class="bg-[#EAD9CF] flex justify-center items-end h-64 px-3 py-5 gap-x-8 rounded-2xl">
                    <div class="flex flex-col justify-between h-full">
                        <p class="font-bold">Sayur</p>

                        <div>
                            <h1 class="text-3xl font-normal">Paprika</h1>
                            <p class="font-light">Rp.50000 per kg</p>
                        </div>

                        <a href="#">
                            <button class="bg-[#345E5C] px-6 py-2 text-white font-light rounded-lg text-sm">Beli Sekarang</button>
                        </a>
                    </div>

                    <div class="w-52">
                        <img src="{{ asset('image/bell-pepper-stuffed-peppers-food-vegetable-fruit-vegetable-6e2c9c6b8cab99b613caf45b442d1340.png') }}" alt="">
                    </div>
                </div>

                <div class="bg-[#F3E8E8] flex justify-center items-end h-64 px-3 py-5 gap-x-8 rounded-2xl">
                    <div class="flex flex-col justify-between h-full">
                        <p class="font-bold">Sayur</p>

                        <div>
                            <h1 class="text-3xl font-normal">Selada</h1>
                            <p class="font-light">Rp.50000 per kg</p>
                        </div>

                        <a href="#">
                            <button class="bg-[#345E5C] px-6 py-2 text-white font-light rounded-lg text-sm">Beli Sekarang</button>
                        </a>
                    </div>

                    <div class="w-52">
                        <img src="{{ asset('image/romaine-lettuce-leaf-vegetable-salad-leaf-lettuce-vegetable-98bb08e8b78390c60956d2f33ed33afa.png') }}" alt="">
                    </div>
                </div>

            </div>

            <div class="w-full flex flex-col gap-y-8 justify-center items-center my-28 text-center">
                <h3 class="text-[#345E5C] font-bold text-2xl">Spesial untuk semua</h3>
                <h1 class="text-old-gray text-4xl font-normal">Hasil Hidroponik terbaik dari kebun<br>hidroponik terbaik</h1>
            </div>

            <div class="w-full flex justify-center items-center rounded-r-2xl h-96 bg-[#345E5C]">
                <div class="w-full rounded-2xl overflow-hidden">
                    <img src="{{ asset('image/getty-images-oIXoJSXuCpw-unsplash 2.png') }}" alt="">
                </div>

                <div class="text-white w-full h-full flex flex-col items-start justify-center gap-y-8 pl-10 pr-14">
                    <h1 class="text-4xl font-medium">Keajaiban dunia<br>sayuran<br>hidroponik</h1>
                    <p>Dibangun di atas prinsip teknologi<br>hidroponik terkini.</p>
                    <a href="#" class="underline">Tentang Kami</a>

                    <div class="relative flex justify-center items-center self-end -translate-y-5">
                        <div class="absolute w-24 h-24 bg-white/5 rounded-full"></div>
                        <a href="#" class="text-xs z-10 hover:underline">More Info</a>
                    </div>
                </div>
            </div>

        </main>

    </body>
</html>

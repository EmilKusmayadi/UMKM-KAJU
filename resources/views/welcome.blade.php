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
            <div class="relative mt-2 rounded-2xl overflow-hidden flex justify-center items-center h-screen">
                <img src="{{ asset("image/olivie-strauss.jpg") }}" alt="olive-strauss" class="absolute top-0 -scale-x-100">
                <div class=" z-10 w-full h-0  md:h-full flex flex-col justify-end md:p-16 md:space-y-10">
                    <h1 class="text-[30px] md:text-7xl font-semibold text-white">Hidrophonik<br>Terbaik</h1>
                    <p class="text-sm md:text-[12px] text-white w-72">Dengan bangga menawarkan sayuran hidroponik tanpa pestisida</p>
                    <a href="#">
                        <button class="bg-green px-6 py-2 text-white font-light rounded-lg">Selengkapnya</button>
                    </a>
                </div>
            </div>

            <div class="w-full flex justify-between items-center text- md:text-2xl mt-14 mb-5">
                <h2>BUNDLE</h2>
                <h2>PROMO</h2>
            </div>

            <div class="w-full grid justify-between items-center grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3">

                <div class="bg-[#E9ECF4] flex justify-center items-end h-52 md:h-64 px-3 py-5 gap-x-8 rounded-xl">
                    <div class="flex flex-col justify-between h-full">
                        <p class="font-bold">Sayur</p>

                        <div>
                            <h1 class="text-xl lg:text-3xl font-normal">Tomat</h1>
                            <p class="font-light">Rp.50000 per kg</p>
                        </div>

                        <a href="#">
                            <button class="bg-green px-6 py-2 text-white font-light rounded-lg text-sm">Beli Sekarang</button>
                        </a>
                    </div>

                    <div class="w-32 md:w-52">
                        <img src="{{ asset('image/cherry-tomato-vegetable-pizza-tomato-png-image-picture-download-1576239854cd1f0dbed9d087d0c87744.png') }}" alt="">
                    </div>
                </div>

                <div class="bg-[#EAD9CF] flex justify-center items-end h-52 md:h-64 px-3 py-5 gap-x-8 rounded-xl">
                    <div class="flex flex-col justify-between h-full">
                        <p class="font-bold">Sayur</p>

                        <div>
                            <h1 class="text-xl lg:text-3xl font-normal">Paprika</h1>
                            <p class="font-light">Rp.50000 per kg</p>
                        </div>

                        <a href="#">
                            <button class="bg-green px-6 py-2 text-white font-light rounded-lg text-sm">Beli Sekarang</button>
                        </a>
                    </div>

                    <div class="w-32 md:w-52">
                        <img src="{{ asset('image/bell-pepper-stuffed-peppers-food-vegetable-fruit-vegetable-6e2c9c6b8cab99b613caf45b442d1340.png') }}" alt="">
                    </div>
                </div>

                <div class="bg-[#F3E8E8] flex justify-center items-end h-52 md:h-64 px-3 py-5 gap-x-8 rounded-xl">
                    <div class="flex flex-col justify-between h-full">
                        <p class="font-bold">Sayur</p>

                        <div>
                            <h1 class="text-xl lg:text-3xl font-normal">Selada</h1>
                            <p class="font-light">Rp.50000 per kg</p>
                        </div>

                        <a href="#">
                            <button class="bg-green px-6 py-2 text-white font-light rounded-lg text-sm">Beli Sekarang</button>
                        </a>
                    </div>

                    <div class="w-32 md:w-52">
                        <img src="{{ asset('image/romaine-lettuce-leaf-vegetable-salad-leaf-lettuce-vegetable-98bb08e8b78390c60956d2f33ed33afa.png') }}" alt="">
                    </div>
                </div>

                {{-- hilang 1 (hidden kalo desktop) --}}
                <div class="lg:hidden bg-[#FFE1EA] flex justify-center items-end h-52 md:h-64 px-3 py-5 gap-x-8 rounded-xl">
                    <div class="flex flex-col justify-between h-full">
                        <p class="font-bold">Sayur</p>

                        <div>
                            <h1 class="text-xl lg:text-3xl font-normal">Kembang Kol</h1>
                            <p class="font-light">Rp.50000 per kg</p>
                        </div>

                        <a href="#">
                            <button class="bg-green px-6 py-2 ms-3 text-white font-light rounded-lg text-sm">Beli Sekarang</button>
                        </a>
                    </div>

                    <div class="w-32 md:w-52">
                        <img src="{{ asset('image/cauliflower-cabbage-vegetable-fruit-food-cauliflower-2f33f5a41d18c5b6041ee7f8bc37683c.png') }}" alt="">
                    </div>
                </div>

            </div>

            <div class="w-full flex flex-col gap-y-8 justify-center items-center mb-16 mt-10 md:mb-28 md:mt-16 text-center">
                <h3 class="text-[#345E5C] font-bold text-[12px] md:text-2xl">Spesial untuk semua</h3>
                <h1 class="text-old-gray text-[16px] md:text-4xl font-normal">Hasil Hidroponik terbaik dari kebun<br>hidroponik terbaik</h1>
            </div>

            <div class="w-full flex justify-center items-center rounded-2xl md:rounded-r-2xl h-[160px] md:h-96 bg-green">
                <div class="md:w-full w-[500px] h-[190px] md:h-[500px] rounded-2xl overflow-hidden">
                    <img src="{{ asset('image/getty-images-oIXoJSXuCpw-unsplash 2.png') }}" alt="" class="h-[190px] w-[500px] md:h-full md:w-full">
                </div>

                <div class="text-white w-full h-full flex flex-col items-start justify-center md:gap-y-8 md:pl-10 md:pr-14 pl-4">
                    <h1 class="text-[12px] md:text-4xl font-medium">Keajaiban dunia<br>sayuran<br>hidroponik</h1>
                    <p class="text-[8px] md:text-[20px]">Dibangun di atas prinsip teknologi<br>hidroponik terkini.</p>
                    <a href="#" class="underline text-[8px] md:text-[16px]">Tentang Kami</a>

                    <div class="relative flex justify-center items-center self-end md:-translate-y-5">
                        <div class="absolute right-3 w-10 h-10 md:w-24 md:h-24 bg-white/5 rounded-full"></div>
                        <a href="#" class="text-[5px] md:text-[12px] z-10 hover:underline mr-5 md:mr-8">More Info</a>
                    </div>
                </div>
            </div>

            <h1 class="text-green font-bold text-[14px] md:text-2xl text-center mt-32 mb-16">Penuhi Kebutuhan Sayur & Buah</h1>

            @include('components.satu')

            @include('components.dua')

        </main>

        @include('components.tiga')

        @include('components.footer')

    </body>
</html>

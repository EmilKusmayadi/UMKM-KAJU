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
                <img src="{{ asset("image/olivie-strauss.jpg") }}" alt="olive-strauss" class="absolute -scale-x-100">
                <div class="z-10 w-full h-full flex flex-col justify-end p-16 space-y-10">
                    <h1 class="text-7xl font-semibold text-old-gray">Hidrophonik<br>Terbaik</h1>
                    <p class="text-sm text-old-gray w-72">Dengan bangga menawarkan sayuran hidroponik tanpa pestisida</p>
                    <a href="#">
                        <button class="bg-green px-6 py-2 text-white font-light rounded-lg">Selengkapnya</button>
                    </a>
                </div>
            </div>

            <div class="w-full flex justify-between items-center text-2xl mt-14 mb-5">
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
                            <button class="bg-green px-6 py-2 text-white font-light rounded-lg text-sm">Beli Sekarang</button>
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
                            <button class="bg-green px-6 py-2 text-white font-light rounded-lg text-sm">Beli Sekarang</button>
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
                            <button class="bg-green px-6 py-2 text-white font-light rounded-lg text-sm">Beli Sekarang</button>
                        </a>
                    </div>

                    <div class="w-52">
                        <img src="{{ asset('image/romaine-lettuce-leaf-vegetable-salad-leaf-lettuce-vegetable-98bb08e8b78390c60956d2f33ed33afa.png') }}" alt="">
                    </div>
                </div>

            </div>

            <div class="w-full flex flex-col gap-y-8 justify-center items-center mb-28 mt-16 text-center">
                <h3 class="text-[#345E5C] font-bold text-2xl">Spesial untuk semua</h3>
                <h1 class="text-old-gray text-4xl font-normal">Hasil Hidroponik terbaik dari kebun<br>hidroponik terbaik</h1>
            </div>

            <div class="w-full flex justify-center items-center rounded-r-2xl h-96 bg-green">
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

            <h1 class="text-green font-bold text-2xl text-center mt-32 mb-16">Penuhi Kebutuhan Sayur & Buah</h1>

            <div class="text-old-gray w-full flex flex-col gap-y-10">
                <div class="w-full flex justify-between items-end">
                    <div class="bg-peanut px-12 py-3 rounded-lg">
                        <ul class="flex gap-x-8">
                            <li class="font-bold">
                                <a href="#">All</a>
                            </li>
                            <li class="font-light">
                                <a href="#">Sayur</a>
                            </li>
                            <li class="font-light">
                                <a href="#">Buah</a>
                            </li>
                            <li class="font-light">
                                <a href="#">Bumbu</a>
                            </li>
                        </ul>
                    </div>
                    <a href="#" class="uppercase border-b-[1px] border-black px-1 font-light">semua</a>
                </div>

                <div class="flex justify-between items-center gap-x-3">

                    <div class="bg-white p-5 h-[17rem] w-60 rounded-2xl flex flex-col justify-end items-center gap-y-4">

                        <div class="w-40">
                            <img src="{{ asset('image/choy-sum-malabar-spinach-leaf-vegetable-vegetable-9bd9b6b779bb3e1bb3390ca0ac149cc7.png') }}" alt="">
                        </div>

                        <div class="flex justify-between items-center w-full">
                            <div>
                                <h2 class="text-xl font-normal">Bayam</h2>
                                <p class="font-light text-[#9AAF43]">Rp.5000</p>
                            </div>

                            <div class="h-9 w-9 grid place-items-center rounded-xl bg-peanut">
                                <a href="#">
                                    @include('components.svg.small-cart')
                                </a>
                            </div>
                        </div>

                    </div>

                    <div class="bg-white p-5 h-[17rem] w-60 rounded-2xl flex flex-col justify-end items-center gap-y-4">

                        <div class="w-40">
                            <img src="{{ asset('image/bell-pepper-stuffed-peppers-food-vegetable-fruit-vegetable-6e2c9c6b8cab99b613caf45b442d1340.png') }}" alt="">
                        </div>

                        <div class="flex justify-between items-center w-full">
                            <div>
                                <h2 class="text-xl font-normal">Paprika</h2>
                                <p class="font-light text-[#9AAF43]">Rp.5000</p>
                            </div>

                            <div class="h-9 w-9 grid place-items-center rounded-xl bg-peanut">
                                <a href="#">
                                    @include('components.svg.small-cart')
                                </a>
                            </div>
                        </div>

                    </div>

                    <div class="bg-white p-5 h-[17rem] w-60 rounded-2xl flex flex-col justify-end items-center gap-y-4">

                        <div class="w-40">
                            <img src="{{ asset('image/cherry-tomato-vegetable-pizza-tomato-png-image-picture-download-1576239854cd1f0dbed9d087d0c87744.png') }}" alt="">
                        </div>

                        <div class="flex justify-between items-center w-full">
                            <div>
                                <h2 class="text-xl font-normal">Tomat</h2>
                                <p class="font-light text-[#9AAF43]">Rp.5000</p>
                            </div>

                            <div class="h-9 w-9 grid place-items-center rounded-xl bg-peanut">
                                <a href="#">
                                    @include('components.svg.small-cart')
                                </a>
                            </div>
                        </div>

                    </div>

                    <div class="bg-white p-5 h-[17rem] w-60 rounded-2xl flex flex-col justify-end items-center gap-y-4">

                        <div class="w-40">
                            <img src="{{ asset('image/romaine-lettuce-leaf-vegetable-salad-leaf-lettuce-vegetable-98bb08e8b78390c60956d2f33ed33afa.png') }}" alt="">
                        </div>

                        <div class="flex justify-between items-center w-full">
                            <div>
                                <h2 class="text-xl font-normal">Selada</h2>
                                <p class="font-light text-[#9AAF43]">Rp.5000</p>
                            </div>

                            <div class="h-9 w-9 grid place-items-center rounded-xl bg-peanut">
                                <a href="#">
                                    @include('components.svg.small-cart')
                                </a>
                            </div>
                        </div>

                    </div>

                    <div class="bg-white p-5 h-[17rem] w-60 rounded-2xl flex flex-col justify-end items-center gap-y-4">

                        <div class="w-40">
                            <img src="{{ asset('image/cauliflower-cabbage-vegetable-fruit-food-cauliflower-2f33f5a41d18c5b6041ee7f8bc37683c.png') }}" alt="">
                        </div>

                        <div class="flex justify-between items-center w-full">
                            <div>
                                <h2 class="text-xl font-normal">Kembang Kol</h2>
                                <p class="font-light text-[#9AAF43]">Rp.5000</p>
                            </div>

                            <div class="h-9 w-9 grid place-items-center rounded-xl bg-peanut">
                                <a href="#">
                                    @include('components.svg.small-cart')
                                </a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <div class="my-20 w-full flex justify-center items-center px-20">

                <div class="relative bg-peanut p-10 flex justify-center items-center gap-x-10 rounded-2xl">
                    <div>
                        <div class="text-old-gray w-80 flex flex-col gap-y-7">
                            <h1 class="font-semibold text-4xl">Memastikan ketersediaan sepanjang tahun</h1>
                            <p class="font-light text-sm">Berkomitmen pada dukungan terhadap petani lokal, membentuk jaringan ekonomi yang berkelanjutan</p>
                            <a href="#" class="border-b border-black py-1 w-fit font-light text-black">About Us</a>
                        </div>

                        <div class="bg-[#997764] p-3 rounded-xl flex justify-between items-center absolute -translate-y-12 translate-x-52">
                            <div class="w-20 bg-white p-2 rounded-xl">
                                <img src="{{ asset('image/romaine-lettuce-leaf-vegetable-salad-leaf-lettuce-vegetable-98bb08e8b78390c60956d2f33ed33afa.png') }}" alt="">
                            </div>

                            <div class="w-full h-full px-2 flex justify-between items-center gap-x-28">
                                <div class="h-full gap-y-6 flex flex-col justify-between text-sm text-white font-light">
                                    <h3>Selada</h3>
                                    <h3>Rp.5000</h3>
                                </div>

                                <div class="stroke-white !text-white">
                                    @include('components.svg.cart')
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-2xl overflow-hidden w-[40vw]">
                        <img src="{{ asset('image/getty-images-TXgvWNoxNls-unsplash.jpg') }}" class="" alt="">
                    </div>
                </div>
            </div>

        </main>

        <div class="bg-green px-8 py-10 flex flex-col justify-center items-center gap-y-10">
            <div class="w-full flex justify-between items-center text-white">
                <h1 class="font-bold text-2xl">Penawaran Spesial</h1>
                <a href="#" class="uppercase border-b-[1px] border-white px-1 font-light">semua</a>
            </div>

            <div class="w-full h-[60vh] max-h-fit flex justify-center items-center gap-x-5">

                <div class="bg-[#D9F2F9] px-5 py-8 rounded-xl w-full h-full flex flex-col justify-between relative">
                    <div class="text-old-gray flex flex-col gap-y-8">
                        <p class="font-bold text-black">Bundle</p>
                        <h1 class="text-3xl font-semibold leading-8">Belanja lebih <br> hemat dan lebih <br>puas</h1>
                        <p>Mulai dari Rp.3000 per kg</p>
                    </div>

                    <div class="">
                        <a href="#">
                            <button class="bg-green px-6 py-2 text-white font-light rounded-lg text-sm">Beli Sekarang</button>
                        </a>
                    </div>

                    <div class="w-80 self-end absolute bottom-0">
                        <img src="{{ asset('image/organic-food-juice-vegetable-fruit-basket-vegetable-png-photos-6d5e358490722e7b06e5f983ba54fbb0.png') }}" alt="">
                    </div>
                </div>

                <div class="bg-[#D8EBE5] px-5 py-8 rounded-xl w-full h-full flex flex-col justify-between relative">
                    <div class="text-old-gray flex flex-col gap-y-8">
                        <p class="font-bold text-black">Promo</p>
                        <h1 class="text-3xl font-semibold leading-8">Penawaran<br> Menarik</h1>
                        <p>Info lebih lanjut</p>
                    </div>

                    <div class="">
                        <a href="#">
                            <button class="bg-green px-6 py-2 text-white font-light rounded-lg text-sm">Cek Sekarang</button>
                        </a>
                    </div>

                    <div class="w-80 self-end absolute bottom-0">
                        <img src="{{ asset('image/fruit-supermarket-vegetable-auglis-supermarket-shelf-water-aaf86a1d356a5514c189d7f7ad03eea1.png') }}" alt="">
                    </div>
                </div>

            </div>
        </div>

        <footer class="w-full bg-peanut flex justify-between items-end px-6 pt-8 pb-12">
            <div class="text-black pr-5">@2024</div>
            <div class="flex flex-col justify-between items-center gap-y-16">
                <div>
                    <ul class="flex gap-x-5 text-old-gray">
                        <li><a href="#">Shop</a></li>
                        <li><a href="#">Tentang Kami</a></li>
                        <li><a href="#">Kontak</a></li>
                    </ul>
                </div>
                <h1 class="text-8xl font-bold text-[#1C1D1C]">Kajuu</h1>
            </div>
            <div class="text-black">
                All RIghts Reservd
            </div>
        </footer>

    </body>
</html>

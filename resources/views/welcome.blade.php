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
    @include('components.responsive-nav')

    <main class="px-3 lg:px-8">
        <div class="relative mt-4 rounded-2xl overflow-hidden flex justify-center items-center bg-cover bg-center bg-no-repeat h-72 lg:h-[85vh]"
            style="background-image: url({{ url('banner_image') . '/' . $homePage->first()->banner_image }});">
            {{-- @if ($homePage->first()->banner_image)
                <img src="{{ url('banner_image') . '/' . $homePage->first()->banner_image }}" alt="olive-strauss"
                    class="absolute -scale-x-100">
            @else
                <h1>TIDAK ADA GAMBAR!</h1>
            @endif --}}
            <div
                class="z-10 w-full h-full flex flex-col items-center lg:items-start justify-end pb-8 lg:p-16 space-y-4 lg:space-y-10">
                <h1
                    class="text-3xl lg:text-7xl text-white text-center font-bold lg:font-semibold lg:leading-tight lg:text-left w-52 lg:w-[26rem]">
                    {{ $homePage->first()->banner_title }}</h1>
                <p class="text-xs text-center w-60 lg:text-left lg:text-sm text-white lg:w-72">Dengan bangga menawarkan
                    sayuran hidroponik tanpa pestisida</p>
                <a href="{{ url('/about') }}">
                    <button
                        class="text-xs lg:text-base bg-green px-6 py-2 text-white font-light rounded-lg">Selengkapnya</button>
                </a>
            </div>
        </div>

        <div
            class="w-full flex justify-between items-center text-sm lg:text-2xl font-semibold lg:font-normal my-5 lg:mt-20 lg:mb-8 lg:px-4">
            <h2>BUNDLE</h2>
            <h2>PROMO</h2>
        </div>

        <div
            class="w-full grid grid-rows-4 gap-y-6 lg:grid-rows-1 grid-cols-1 lg:grid-cols-3 justify-between items-center gap-x-4 xl:gap-x-4">

            <div
                class="bg-[#E9ECF4] flex justify-center xl:justify-between items-end w-full h-56 lg:h-64 xl:h-72 px-4 py-5 gap-x-8 rounded-2xl">
                <div class="flex flex-col justify-between h-full">
                    <p class="font-bold">Sayur</p>

                    <div>
                        <h1 class="text-3xl font-normal">Tomat</h1>
                        <p class="text-sm lg:text-base font-light">Rp.5000 per kg</p>
                    </div>

                    <a href="{{ url('/cart') }}">
                        <button class="bg-green px-5 lg:px-6 py-2 text-white font-light rounded-lg text-xs">Beli
                            Sekarang</button>
                    </a>
                </div>

                <div class="w-36 lg:w-48 xl:w-52 mb-5">
                    <a href="{{ url('/detail') }}">
                        <img src="{{ asset('image/cherry-tomato-vegetable-pizza-tomato-png-image-picture-download-1576239854cd1f0dbed9d087d0c87744.png') }}"
                            alt="">
                    </a>
                </div>
            </div>

            <div
                class="bg-[#EAD9CF] flex justify-center xl:justify-between items-end w-full h-56 lg:h-64 xl:h-72 px-4 py-5 gap-x-8 rounded-2xl">
                <div class="flex flex-col justify-between h-full">
                    <p class="font-bold">Sayur</p>

                    <div>
                        <h1 class="text-3xl font-normal">Paprika</h1>
                        <p class="text-sm lg:text-base font-light">Rp.5000 per kg</p>
                    </div>

                    <a href="{{ url('/cart') }}">
                        <button class="bg-green px-5 lg:px-6 py-2 text-white font-light rounded-lg text-xs">Beli
                            Sekarang</button>
                    </a>
                </div>
                <a href="{{ url('/detail') }}">
                    <div class="w-36 lg:w-48 xl:w-52">
                        <img src="{{ asset('image/bell-pepper-stuffed-peppers-food-vegetable-fruit-vegetable-6e2c9c6b8cab99b613caf45b442d1340.png') }}"
                            alt="">
                    </div>
                </a>
            </div>

            <div
                class="bg-[#F3E8E8] flex justify-center xl:justify-between items-end w-full h-56 lg:h-64 xl:h-72 px-4 py-5 gap-x-8 rounded-2xl">
                <div class="flex flex-col justify-between h-full">
                    <p class="font-bold">Sayur</p>

                    <div>
                        <h1 class="text-3xl font-normal">Selada</h1>
                        <p class="text-sm lg:text-base font-light">Rp.5000 per kg</p>
                    </div>

                    <a href="{{ url('/cart') }}">
                        <button class="bg-green px-5 lg:px-6 py-2 text-white font-light rounded-lg text-xs">Beli
                            Sekarang</button>
                    </a>
                </div>
                <a href="{{ url('/detail') }}">
                    <div class="w-36 lg:w-48 xl:w-52">
                        <img src="{{ asset('image/romaine-lettuce-leaf-vegetable-salad-leaf-lettuce-vegetable-98bb08e8b78390c60956d2f33ed33afa.png') }}"
                            alt="">
                    </div>
                </a>
            </div>

            <div
                class="lg:hidden bg-[#F3E8E8] flex justify-center xl:justify-between items-end w-full h-56 lg:h-64 xl:h-72 px-4 py-5 gap-x-8 rounded-2xl">
                <div class="flex flex-col justify-between h-full">
                    <p class="font-bold">Sayur</p>

                    <div>
                        <h1 class="text-3xl font-normal">Kol</h1>
                        <p class="text-sm lg:text-base font-light">Rp.5000 per kg</p>
                    </div>

                    <a href="{{ url('/cart') }}">
                        <button class="bg-green px-5 lg:px-6 py-2 text-white font-light rounded-lg text-xs">Beli
                            Sekarang</button>
                    </a>
                </div>
                <a href="{{ url('/detail') }}">
                    <div class="w-36 lg:w-48 xl:w-52">
                        <img src="{{ asset('image/bungakol.png') }}" alt="">
                    </div>
                </a>
            </div>

        </div>

        <div
            class="w-full flex flex-col gap-y-4 lg:gap-y-8 justify-center items-center my-12 lg:mt-24 lg:mb-28 xl:mb-36 text-center">
            <h3 class="text-[#345E5C] font-bold lg:text-2xl">Spesial untuk semua</h3>
            <p class="text-old-gray lg:text-4xl font-normal">
                Hasil Hidroponik terbaik dari kebun<br>hidroponik terbaik
            </p>
        </div>

        <div class="w-full flex justify-center items-center rounded-2xl h-32 lg:h-96 bg-green">
            <div class="w-full rounded-2xl overflow-hidden">
                <img src="{{ asset('image/getty-images-oIXoJSXuCpw-unsplash 2.png') }}" alt="">
            </div>

            <div
                class="text-white w-full h-full flex flex-col items-start justify-center gap-y-2 pt-2 lg:pt-0 lg:gap-y-8 pl-3 lg:pl-10 lg:pr-14">
                <h1 class="text-xs lg:text-4xl font-medium">Keajaiban dunia<br>sayuran<br>hidroponik</h1>
                <p class="text-[0.50rem] lg:text-base">Dibangun di atas prinsip teknologi<br>hidroponik terkini.</p>
                <a href="{{ url('/about') }}"
                    class="text-[0.60rem] font-light lg:font-normal lg:text-base border-b border-b-white">Tentang
                    Kami</a>

                <div
                    class="relative flex justify-center items-center self-end -translate-x-5 -translate-y-5 lg:-translate-x-0 lg:-translate-y-5">
                    <div class="absolute w-10 h-10 lg:w-24 lg:h-24 bg-white/5 rounded-full"></div>
                    <a href="{{ url('/about') }}" class="text-[0.35rem] lg:text-xs z-10 hover:underline">More Info</a>
                </div>
            </div>
        </div>

        <h1 class="text-green font-bold text-sm lg:text-2xl text-center my-10 lg:mt-44 lg:mb-24 xl:mb-20">Penuhi
            Kebutuhan Sayur & Buah</h1>

        <div class="text-old-gray w-full flex flex-col gap-y-10 lg:gap-y-16">
            <div class="w-full flex justify-between items-center lg:items-end">
                <div class="bg-peanut px-5 lg:px-12 text-xs lg:text-base py-3 rounded-lg">
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
                <a href="{{ url('/shop') }}" class="uppercase border-b-[1px] border-black text-xs lg:text-base mx-4 lg:mx-0 px-1 font-light">semua</a>
            </div>

            <div class="md:flex justify-between items-center gap-x-3 hidden">

                @foreach ($product as $datas)
                    @if ($loop->iteration <= 5)
                        {{-- Limit to 5 iterations --}}
                        <div
                            class="bg-white p-5 h-[17rem] w-60 rounded-2xl flex flex-col justify-end items-center gap-y-4">
                            <div class="w-40">
                                <a href="{{ url('/detail') }}">
                                    <img src="{{ url('product_thumbnail') . '/' . $datas->product_thumbnail }}"
                                        alt="">
                                </a>
                            </div>
                            <div class="flex justify-between items-center w-full">
                                <div>
                                    <h2 class="text-xl font-normal">{{ $datas->product_name_ind }}</h2>
                                    <p class="font-light text-[#9AAF43]">Rp.{{ $datas->selling_price }}</p>
                                </div>
                                <div class="h-9 w-9 grid place-items-center rounded-xl bg-peanut">
                                    <a href="{{ url('/cart') }}">
                                        @include('components.svg.small-cart')
                                    </a>
                                </div>
                            </div>
                        </div>
                    @else
                    @break
                @endif
            @endforeach
        </div>
        <div class="grid grid-cols-2 gap-3 md:hidden">

            @foreach ($product as $datas)
                @if ($loop->iteration <= 4)
                <a href="{{ url('/cart') }}"
                class="bg-white p-5 h-[12rem] w-44 rounded-xl flex flex-col justify-end items-center gap-y-4">
                <div class="w-24">
                    <img src="{{ url('product_thumbnail') . '/' . $datas->product_thumbnail }}"
                        alt="">
                </div>
                <div class="flex justify-between items-center w-full">
                    <div>
                        <h2 class="text-sm font-normal">{{ $datas->product_name_ind }}</h2>
                        <p class="font-light text-sm text-[#9AAF43]">
                            Rp.{{ $datas->selling_price }}</p>
                    </div>
                    <div class="h-[2rem] w-[2rem] grid place-items-center rounded-xl bg-peanut">
                        <div>
                            <svg width="18" height="18" viewBox="0 0 24 24"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M17 18C17.5304 18 18.0391 18.2107 18.4142 18.5858C18.7893 18.9609 19 19.4696 19 20C19 20.5304 18.7893 21.0391 18.4142 21.4142C18.0391 21.7893 17.5304 22 17 22C16.4696 22 15.9609 21.7893 15.5858 21.4142C15.2107 21.0391 15 20.5304 15 20C15 18.89 15.89 18 17 18ZM1 2H4.27L5.21 4H20C20.2652 4 20.5196 4.10536 20.7071 4.29289C20.8946 4.48043 21 4.73478 21 5C21 5.17 20.95 5.34 20.88 5.5L17.3 11.97C16.96 12.58 16.3 13 15.55 13H8.1L7.2 14.63L7.17 14.75C7.17 14.8163 7.19634 14.8799 7.24322 14.9268C7.29011 14.9737 7.3537 15 7.42 15H19V17H7C6.46957 17 5.96086 16.7893 5.58579 16.4142C5.21071 16.0391 5 15.5304 5 15C5 14.65 5.09 14.32 5.24 14.04L6.6 11.59L3 4H1V2ZM7 18C7.53043 18 8.03914 18.2107 8.41421 18.5858C8.78929 18.9609 9 19.4696 9 20C9 20.5304 8.78929 21.0391 8.41421 21.4142C8.03914 21.7893 7.53043 22 7 22C6.46957 22 5.96086 21.7893 5.58579 21.4142C5.21071 21.0391 5 20.5304 5 20C5 18.89 5.89 18 7 18ZM16 11L18.78 6H6.14L8.5 11H16Z"
                                    fill="black" />
                            </svg>
                        </div>
                    </div>
                </div>
            </a>
                @else
                @break
            @endif
        @endforeach
    </div>

</div>
</div>

<div class="my-14 lg:my-40 w-full flex justify-center items-center lg:px-20">
    <div class="relative bg-peanut py-6 px-4 lg:p-10 flex justify-center items-center lg:gap-x-10 rounded-2xl">
        <div>
            <div class="text-old-gray lg:w-80 flex flex-col gap-y-3 lg:gap-y-7">
                <h1 class="font-semibold lg:text-4xl">Memastikan ketersediaan sepanjang tahun</h1>
                <p class="font-light text-xs lg:text-sm">Berkomitmen pada dukungan terhadap petani lokal, membentuk
                    jaringan ekonomi yang berkelanjutan</p>
                <a href="{{ url('/about') }}"
                    class="border-b border-black text-sm lg:text-base lg:py-1 w-fit lg:font-light text-black">About Us</a>
            </div>

            <div
                class="bg-[#997764] scale-75 lg:scale-100 h-14 lg:h-fit w-48 lg:w-fit py-1 px-2 lg:p-3 rounded-xl flex justify-between items-center absolute -translate-y-12 lg:-translate-y-12 translate-x-36 lg:translate-x-52">
                <div class="lg:h-fit w-10 lg:w-20 bg-white p-2 rounded-xl">
                    <img src="{{ asset('image/romaine-lettuce-leaf-vegetable-salad-leaf-lettuce-vegetable-98bb08e8b78390c60956d2f33ed33afa.png') }}"
                        alt="">
                </div>

                <div class="w-full h-full px-2 flex justify-between items-center gap-x-5 lg:gap-x-28">
                    <div class="h-full lg:gap-y-6 flex flex-col justify-center lg:justify-between text-xs lg:text-sm text-white font-light">
                        <h3>Selada</h3>
                        <h3>Rp.5000</h3>
                    </div>

                    <div class="stroke-white !text-white">
                        @include('components.svg.cart')
                    </div>
                </div>
            </div>
        </div>
        <div class="rounded-2xl overflow-hidden h-36 w-60 lg:h-fit lg:w-[40vw]">
            <img src="{{ asset('image/getty-images-TXgvWNoxNls-unsplash.jpg') }}" class="h-full lg:h-fit w-full"
                alt="">
        </div>

        {{-- <div class="rounded-2xl h-20 w-20 overflow-hidden bg-cover bg-center bg-no-repeat" style="background: url({{ asset('image/getty-images-TXgvWNoxNls-unsplash.jpg') }})">

        </div> --}}
    </div>
</div>

</main>

<div class="bg-green px-3 pt-6 pb-10 lg:px-8 lg:py-10 flex flex-col justify-center items-center gap-y-8 lg:gap-y-10">
    <div class="w-full flex justify-between items-center text-white">
        <h1 class="font-bold text-2xl">Penawaran Spesial</h1>
        <a href="{{ url('/shop') }}" class="uppercase border-b-[1px] border-white text-xs lg:text-base mx-4 lg:mx-0 px-1 font-light">semua</a>
    </div>

    <div class="w-full flex flex-col lg:flex-row justify-center items-center gap-y-6 lg:gap-y-0 gap-x-5">

        <div class="bg-[#D9F2F9] px-5 py-8 rounded-xl w-full h-[247px] lg:h-[65vh] flex flex-col gap-y-6 lg:gap-y-0 justify-between relative">
            <div class="text-old-gray flex flex-col gap-y-4 lg:gap-y-8 z-20">
                <p class="text-xs lg:text-base font-bold text-black">Bundle</p>
                <h1 class="lg:text-3xl font-bold lg:font-semibold leading-5 lg:leading-8">Belanja lebih <br> hemat dan lebih <br>puas</h1>
                <p class="text-xs lg:text-base">Mulai dari Rp.3000 per kg</p>
            </div>

            <div class="lg:-translate-y-5 z-20">
                <a href="{{ url('/cart') }}">
                    <button class="bg-green px-6 py-2 text-white font-light rounded-lg text-sm">Beli
                        Sekarang</button>
                </a>
            </div>

            <div class="w-52 lg:w-80 self-end absolute bottom-7 lg:bottom-0">
                <img src="{{ asset('image/organic-food-juice-vegetable-fruit-basket-vegetable-png-photos-6d5e358490722e7b06e5f983ba54fbb0.png') }}"
                    alt="">
            </div>
        </div>

        <div class="bg-[#D8EBE5] px-5 py-8 rounded-xl w-full h-[247px] lg:h-[65vh] flex flex-col justify-between relative">
            <div class="text-old-gray flex flex-col gap-y-4 lg:gap-y-8 z-20">
                <p class="text-xs lg:text-base font-bold text-black">Promo</p>
                <h1 class="lg:text-3xl font-bold lg:font-semibold leading-6 lg:leading-8">Penawaran<br> Menarik</h1>
                <p class="text-xs lg:text-base">Info lebih lanjut</p>
            </div>

            <div class="lg:-translate-y-5 z-20">
                <a href="{{ url('/shop') }}">
                    <button class="bg-green px-6 py-2 text-white font-light rounded-lg text-sm">Cek
                        Sekarang</button>
                </a>
            </div>

            <div class="w-52 lg:w-80 self-end absolute bottom-0">
                <img src="{{ asset('image/fruit-supermarket-vegetable-auglis-supermarket-shelf-water-aaf86a1d356a5514c189d7f7ad03eea1.png') }}"
                    alt="">
            </div>
        </div>

    </div>
</div>

@include('components.responsive-footer')

</body>

</html>

<x-app-layout>
    @include('components.nav')
    <div class="mx-5 md:mx-8">
        <div class="w-full mt-8">
            <img src="{{ asset('image/mobile-promo.png') }}" alt="" class=" block md:hidden">
            <img src="{{ asset('image/promo.png') }}" alt="" class="w-full hidden md:block">
        </div>
        <div class="my-10">
            <h1 class="text-[#345E5C] font-bold text-lg md:text-4xl mt-10">Semua Promo</h1>
            <div class="w-full block md:flex justify-between items-center gap-x-4 xl:gap-x-4 mt-10">

                <div
                    class="bg-[#E9ECF4] flex justify-center xl:justify-between items-end w-full h-64 xl:h-72 px-4 py-5 gap-x-8 rounded-2xl mb-6 md:mb-0">
                    <div class="flex flex-col justify-between h-full">
                        <p class="font-bold">Sayur</p>

                        <div>
                            <h1 class="text-3xl font-normal">Tomat</h1>
                            <p class="font-light">Rp.5000/kg</p>
                        </div>

                        <a href="{{ url('/cart') }}">
                            <button class="bg-green px-5 py-2 text-white font-light rounded-lg text-xs">Beli
                                Sekarang</button>
                        </a>
                    </div>

                    <div class="w-32 xl:w-52 mb-5">
                        <a href="{{ url('/detail') }}">
                            <img src="{{ asset('image/cherry-tomato-vegetable-pizza-tomato-png-image-picture-download-1576239854cd1f0dbed9d087d0c87744.png') }}"
                                alt="">
                        </a>
                    </div>
                </div>

                <div
                    class="bg-[#EAD9CF] flex justify-center xl:justify-between items-end w-full h-64 xl:h-72 px-4 py-5 gap-x-8 rounded-2xl mb-6 md:mb-0">
                    <div class="flex flex-col justify-between h-full">
                        <p class="font-bold">Sayur</p>

                        <div>
                            <h1 class="text-3xl font-normal">Paprika</h1>
                            <p class="font-light">Rp.5000/kg</p>
                        </div>

                        <a href="{{ url('/cart') }}">
                            <button class="bg-green px-5 py-2 text-white font-light rounded-lg text-xs">Beli
                                Sekarang</button>
                        </a>
                    </div>
                    <a href="{{ url('/detail') }}">
                        <div class="w-32 xl:w-52">
                            <img src="{{ asset('image/bell-pepper-stuffed-peppers-food-vegetable-fruit-vegetable-6e2c9c6b8cab99b613caf45b442d1340.png') }}"
                                alt="">
                        </div>
                    </a>
                </div>

                <div
                    class="bg-[#F3E8E8] flex justify-center xl:justify-between items-end w-full h-64 xl:h-72 px-4 py-5 gap-x-8 rounded-2xl mb-6 md:mb-0">
                    <div class="flex flex-col justify-between h-full">
                        <p class="font-bold">Sayur</p>

                        <div>
                            <h1 class="text-3xl font-normal">Selada</h1>
                            <p class="font-light">Rp.5000/kg</p>
                        </div>

                        <a href="{{ url('/cart') }}">
                            <button class="bg-green px-5 py-2 text-white font-light rounded-lg text-xs">Beli
                                Sekarang</button>
                        </a>
                    </div>
                    <a href="{{ url('/detail') }}">
                        <div class="w-32 xl:w-52">
                            <img src="{{ asset('image/romaine-lettuce-leaf-vegetable-salad-leaf-lettuce-vegetable-98bb08e8b78390c60956d2f33ed33afa.png') }}"
                                alt="">
                        </div>
                    </a>
                </div>

            </div>
            <div class="w-full block md:flex justify-between items-center gap-x-4 xl:gap-x-4 md:mt-10">

                <div
                    class="bg-[#E9ECF4] flex justify-center xl:justify-between items-end w-full h-64 xl:h-72 px-4 py-5 gap-x-8 rounded-2xl mb-6 md:mb-0">
                    <div class="flex flex-col justify-between h-full">
                        <p class="font-bold">Sayur</p>

                        <div>
                            <h1 class="text-3xl font-normal">Kol</h1>
                            <p class="font-light">Rp.5000/kg</p>
                        </div>

                        <a href="{{ url('/cart') }}">
                            <button class="bg-green px-5 py-2 text-white font-light rounded-lg text-xs">Beli
                                Sekarang</button>
                        </a>
                    </div>

                    <div class="w-32 xl:w-52 mb-5">
                        <a href="{{ url('/detail') }}">
                            <img src="{{ asset('image/bungakol.png') }}" alt="">
                        </a>
                    </div>
                </div>

                <div
                    class="bg-[#EAD9CF] flex justify-center xl:justify-between items-end w-full h-64 xl:h-72 px-4 py-5 gap-x-8 rounded-2xl mb-6 md:mb-0">
                    <div class="flex flex-col justify-between h-full">
                        <p class="font-bold">Buah</p>

                        <div>
                            <h1 class="text-3xl font-normal">Strawberry</h1>
                            <p class="font-light">Rp.5000/kg</p>
                        </div>

                        <a href="{{ url('/cart') }}">
                            <button class="bg-green px-5 py-2 text-white font-light rounded-lg text-xs">Beli
                                Sekarang</button>
                        </a>
                    </div>
                    <a href="{{ url('/detail') }}">
                        <div class="xl:w-[180px]">
                            <img src="{{ asset('image/strawberry.png') }}" alt="">
                        </div>
                    </a>
                </div>

                <div
                    class="bg-[#F3E8E8] flex justify-center xl:justify-between items-end w-full h-64 xl:h-72 px-4 py-5 gap-x-8 rounded-2xl mb-6 md:mb-0">
                    <div class="flex flex-col justify-between h-full">
                        <p class="font-bold">Sayur</p>

                        <div>
                            <h1 class="text-3xl font-normal">Mentimun</h1>
                            <p class="font-light">Rp.5000/kg</p>
                        </div>

                        <a href="{{ url('/cart') }}">
                            <button class="bg-green px-5 py-2 text-white font-light rounded-lg text-xs">Beli
                                Sekarang</button>
                        </a>
                    </div>
                    <a href="{{ url('/detail') }}">
                        <div class="xl:w-[190px]">
                            <img src="{{ asset('image/mentimun.png') }}" alt="">
                        </div>
                    </a>
                </div>

            </div>

            <div class="">
                <div class="py-10 block md:flex flex-col justify-center items-center gap-y-10">
                    <div class="w-full block md:flex justify-between items-center text-white">
                        <h1 class="font-bold text-lg md:text-2xl text-[#345E5C]">Penawaran Spesial</h1>
                        <a href="{{ url('/shop') }}"
                            class="uppercase border-b-[1px] border-white px-1 font-light">semua</a>
                    </div>

                    <div class="w-full block md:flex justify-center items-center gap-x-5">

                        <div
                            class="bg-[#D9F2F9] px-5 py-8 rounded-xl w-full h-[65vh] flex flex-col justify-between relative mb-8 md:mb-0">
                            <div class="text-old-gray flex flex-col text-center md:text-start">
                                <p class="font-bold text-black mb-10 md:mb-20 text-3xl md:text-sm">Bundle</p>
                                <h1 class="text-xl md:text-3xl font-semibold leading-8 mb-3 md:mb-5">Pelangi
                                </h1>
                                <p>5 Sayur 3 Buah</p>
                            </div>

                            <div class="-translate-y-5 hidden md:block">
                                <a href="{{ url('/cart') }}">
                                    <button class="bg-green px-6 py-2 text-white font-light rounded-lg text-sm">Beli
                                        Sekarang</button>
                                </a>
                            </div>

                            <div class="w-80 self-end absolute bottom-20 md:bottom-0">
                                <img src="{{ asset('image/organic-food-juice-vegetable-fruit-basket-vegetable-png-photos-6d5e358490722e7b06e5f983ba54fbb0.png') }}"
                                    alt="">
                            </div>

                            <div class="block md:hidden text-center">
                                <a href="{{ url('/cart') }}">
                                    <button class="bg-green px-6 py-2 text-white font-light rounded-lg text-sm">Beli
                                        Sekarang</button>
                                </a>
                            </div>
                        </div>

                        <div
                            class="bg-[#D8EBE5] px-5 py-8 rounded-xl w-full h-[70vh] md:h-[65vh] flex flex-col justify-between relative">
                            <div class="text-old-gray flex flex-col text-center md:text-start">
                                <p class="font-bold text-black mb-10 md:mb-20 text-3xl md:text-sm">Promo</p>
                                <h1 class="text-xl md:text-3xl font-semibold leading-8 mb-3 md:mb-5">Bucket
                                </h1>
                                <p>Januari Selada Bucket</p>
                            </div>

                            <div class="-translate-y-5 hidden md:block">
                                <a href="{{ url('/shop') }}">
                                    <button class="bg-green px-6 py-2 text-white font-light rounded-lg text-sm">Cek
                                        Sekarang</button>
                                </a>
                            </div>

                            <div class="w-80 self-end absolute bottom-20 md:bottom-0">
                                <img src="{{ asset('image/fruit-supermarket-vegetable-auglis-supermarket-shelf-water-aaf86a1d356a5514c189d7f7ad03eea1.png') }}"
                                    alt="">
                            </div>
                            <div class="block md:hidden text-center">
                                <a href="{{ url('/cart') }}">
                                    <button class="bg-green px-6 py-2 text-white font-light rounded-lg text-sm">Beli
                                        Sekarang</button>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('components.footer')
</x-app-layout>

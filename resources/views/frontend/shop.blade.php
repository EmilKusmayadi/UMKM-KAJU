<x-app-layout>
    @include('components.responsive-nav')
    <div class="">
        <div class="mx-[30px]">
            <div class="flex justify-between">
                <div class="font-medium">
                    <h1 class="text-[22px] md:text-[45px] lg:text-[60px] mt-10 ">Keajaiban dunia <br> sayuran
                        hidroponik
                    </h1>
                </div>
                <div class="md:flex md:mt-16 lg:mt-28 hidden">
                    <a href="{{ url('/about') }}"
                        class="md:w-[140px] lg:w-[208px] h-[54px] bg-[#345E5C] text-white rounded-[10px] md:me-4 lg:me-4 md:text-xs lg:text-lg mt-20 flex justify-center items-center">
                        Tentang Kami
                    </a>
                    <button
                        class="md:w-[140px] lg:w-[208px] md:h-[52px] bg-[#E8C597] text-black rounded-[10px] md:block md:text-xs lg:text-lg mt-20">Selengkapnya</button>
                </div>
            </div>
            <div class="flex justify-between lg:mt-10 mt-7">
                <div class="lg:mt-36 mt-12 me-5">
                    <p class="font-semibold text-[10px] lg:text-[16px]">Teknologin <br> Hidroponik</p>
                    <img src="{{ asset('image/shop2.png') }}" alt="" class="mt-5 lg:mt-10 w-[35px] lg:w-[64px]">
                </div>
                <div class="">
                    <img src="{{ asset('image/shop1.png') }}" alt=""
                        class="lg:w-[932px] lg:h-[302px] hidden md:block">
                    <img src="{{ asset('image/mobile1.png') }}" alt=""
                        class="lg:w-[932px] lg:h-[302px] block md:hidden">
                </div>
            </div>
            <div class="md:hidden lg:mt-28 my-5 flex justify-center">
                <a href="{{ url('/about') }}"
                    class="w-[100px] md:w-[140px] lg:w-[208px] h-[35px] lg:h-[52px] bg-[#345E5C] text-white rounded-[5px] me-4 lg:me-4 md:block md:text-xs lg:text-lg text-[12px] flex justify-center items-center">Tentang
                    Kami</a>
                <button
                    class="w-[100px] md:w-[140px] lg:w-[208px] h-[35px] lg:h-[52px] bg-[#E8C597] text-black rounded-[5px] md:block md:text-xs lg:text-lg text-[12px]">Selengkapnya</button>
            </div>
            <div class="flex justify-center lg:mt-20 mt-16">
                <button
                    class="w-[61px] md:w-[140px] lg:w-[208px] md:h-[47px] lg:h-[52px] bg-[#345E5C] text-white rounded-[5px] me-4 lg:me-4 md:block md:text-xs lg:text-lg text-[12px]">Shop</button>
                <button
                    class="w-[61px] md:w-[140px] lg:w-[208px] md:h-[47px] lg:h-[52px] border border-[#E8C597] text-black rounded-[5px] md:block md:text-xs lg:text-lg text-[12px]">Promo</button>
            </div>
            <div class="mt-10">
                <div class="flex w-full justify-center">
                    <div class="hidden bg-[#E8C597] h-fit lg:flex px-8 pt-6 pb-14 gap-y-5 justify-start items-start flex-col w-60 rounded-[20px]">
                        <h1 class="font-bold text-[32px]">Kategori</h1>
                        <div class="">
                            <p
                                class="text-[24px] mb-5 border border-b-black border-x-transparent border-t-transparent w-[150px]">
                                Semua</p>
                            <p
                                class="text-[24px] mb-5 border border-b-black border-x-transparent border-t-transparent w-[150px]">
                                Sayur</p>
                            <p
                                class="text-[24px] mb-5 border border-b-black border-x-transparent border-t-transparent w-[150px]">
                                Buah</p>
                            <p
                                class="text-[24px] mb-5 border border-b-black border-x-transparent border-t-transparent w-[150px]">
                                Bumbu</p>
                        </div>
                    </div>
                    <div class="ms-[40px]">
                        <div class="text-old-gray w-full flex-col gap-y-3 hidden md:flex">
                            <div class="grid justify-start items-center gap-y-10 lg:gap-y-5 gap-x-3 grid-cols-2 grid-rows-1 lg:grid-cols-4">

                                @foreach ($product->take(12) as $datas)
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
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
                <div class="md:hidden text-old-gray w-full flex flex-col gap-y-3">
                    <div class="grid justify-end items-center gap-3 grid-cols-2 sm:grid-cols-2 lg:grid-cols-4">
                        @foreach ($product as $datas)
                            <div
                                class="bg-white p-5 h-[190px] w-full rounded-xl flex flex-col justify-end items-center gap-y-4">
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
                                        <a href="{{ url('/cart') }}">
                                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M17 18C17.5304 18 18.0391 18.2107 18.4142 18.5858C18.7893 18.9609 19 19.4696 19 20C19 20.5304 18.7893 21.0391 18.4142 21.4142C18.0391 21.7893 17.5304 22 17 22C16.4696 22 15.9609 21.7893 15.5858 21.4142C15.2107 21.0391 15 20.5304 15 20C15 18.89 15.89 18 17 18ZM1 2H4.27L5.21 4H20C20.2652 4 20.5196 4.10536 20.7071 4.29289C20.8946 4.48043 21 4.73478 21 5C21 5.17 20.95 5.34 20.88 5.5L17.3 11.97C16.96 12.58 16.3 13 15.55 13H8.1L7.2 14.63L7.17 14.75C7.17 14.8163 7.19634 14.8799 7.24322 14.9268C7.29011 14.9737 7.3537 15 7.42 15H19V17H7C6.46957 17 5.96086 16.7893 5.58579 16.4142C5.21071 16.0391 5 15.5304 5 15C5 14.65 5.09 14.32 5.24 14.04L6.6 11.59L3 4H1V2ZM7 18C7.53043 18 8.03914 18.2107 8.41421 18.5858C8.78929 18.9609 9 19.4696 9 20C9 20.5304 8.78929 21.0391 8.41421 21.4142C8.03914 21.7893 7.53043 22 7 22C6.46957 22 5.96086 21.7893 5.58579 21.4142C5.21071 21.0391 5 20.5304 5 20C5 18.89 5.89 18 7 18ZM16 11L18.78 6H6.14L8.5 11H16Z"
                                                    fill="black" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="">
            <div class="bg-green h-[106vh] md:[60vh] px-8 items-center gap-y-10 mt-10">
                <div class="w-full flex justify-between items-center text-white pt-10">
                    <h1 class="font-bold text-2xl">Penawaran Spesial</h1>
                    <a href="#" class="uppercase border-b-[1px] border-white px-1 font-light">semua</a>
                </div>
                <div
                    class="w-full h-[60vh] max-h-fit grid grid-cols-1 md:grid-cols-2 justify-center items-center gap-x-5 mt-10">
                    <div
                        class="bg-[#D9F2F9] px-5 py-8 rounded-xl w-full h-full flex flex-col justify-between relative mb-7 md:mb-0">
                        <div class="text-old-gray flex flex-col gap-y-8">
                            <p class="font-bold text-black">Bundle</p>
                            <h1 class="text-2xl md:text-4xl font-semibold leading-8">Belanja lebih <br> hemat
                                dan
                                lebih
                                <br>puas
                            </h1>
                            <p class="text-xs md:text-lg">Mulai dari Rp.3000 per kg</p>
                        </div>
                        <div class="">
                            <a href="#">
                                <button class="bg-green px-3 md:px-6 py-2 text-white font-light rounded-lg text-sm">Beli
                                    Sekarang</button>
                            </a>
                        </div>
                        <div class="w-44 md:w-80 self-end absolute bottom-10 md:bottom-0">
                            <img src="{{ asset('image/organic-food-juice-vegetable-fruit-basket-vegetable-png-photos-6d5e358490722e7b06e5f983ba54fbb0.png') }}"
                                alt="">
                        </div>
                    </div>
                    <div class="bg-[#D8EBE5] px-5 py-8 rounded-xl w-full h-full flex flex-col justify-between relative">
                        <div class="text-old-gray flex flex-col gap-y-8">
                            <p class="font-bold text-black">Promo</p>
                            <h1 class="text-2xl md:text-4xl font-semibold leading-8">Penawaran<br> Menarik</h1>
                            <p class="text-xs mb-3 md:text-lg">Info lebih lanjut</p>
                        </div>
                        <div class="">
                            <a href="#">
                                <button class="bg-green px-3 md:px-6 py-2 text-white font-light rounded-lg text-sm">Cek
                                    Sekarang</button>
                            </a>
                        </div>
                        <div class="w-44 sm:w-55 md:w-80 self-end absolute bottom-0">
                            <img src="{{ asset('image/fruit-supermarket-vegetable-auglis-supermarket-shelf-water-aaf86a1d356a5514c189d7f7ad03eea1.png') }}"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('components.responsive-footer')
</x-app-layout>

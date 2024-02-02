<x-app-layout>
    @include('components.responsive-nav')
    <div class="h-[200vh] mt-4 lg:mt-10">
        <div class="mx-8">
            <div class="block md:flex">
                <div class="">
                    <img src="{{ url('product_thumbnail') . '/' . $product->first()->product_thumbnail }}" alt=""
                        class="w-[500px] rounded-xl overflow-hidden">
                    <div class="flex mt-3 lg:mt-5">
                        <img src="{{ asset('image/Rectangle 132.png') }}" alt=""
                            class="w-[90px] md:w-[100px] lg:w-40 me-3">
                        <img src="{{ asset('image/Rectangle 133.png') }}" alt=""
                            class="w-[90px] md:w-[100px] lg:w-40 me-3">
                        <img src="{{ asset('image/Group 95.png') }}" alt=""
                            class="w-[90px] md:w-[100px] lg:w-40">
                    </div>
                </div>
                <div class="md:w-[77%] md:ms-8 lg:w-[40%] lg:ms-16 mt-4">
                    <h1 class="text-[20px] lg:text-[40px]">{{ $product->first()->product_name_ind }}</h1>
                    <p class="text-[15px] lg:text-[24px] lg:mt-7">Rp.{{ $product->first()->selling_price }} - Per Kg</p>
                    <div class="flex text-center my-5 gap-x-3 lg:gap-x-5">

                        <div
                            class="w-28 h-16 lg:w-32 lg:h-[4.2rem] flex flex-col gap-y-1 lg:gap-y-2 justify-center items-center bg-[#F3E8E8] rounded-lg">
                            <h2 class="font-semibold text-sm lg:text-base text-black">Imperfect</h2>
                            <div class="flex text-xs lg:text-sm justify-evenly w-full">
                                <p>1Kg</p>
                                <p>Rp.3000</p>
                            </div>
                        </div>

                        <div
                            class="w-28 h-16 lg:w-32 lg:h-[4.2rem] flex flex-col gap-y-1 lg:gap-y-2 justify-center items-center bg-[#EAD9CF] rounded-lg">
                            <h2 class="font-semibold text-sm lg:text-base text-black">Normal</h2>
                            <div class="flex text-xs lg:text-sm justify-evenly w-full">
                                <p>1Kg</p>
                                {{-- <p>Rp.3000</p> --}}
                            </div>
                        </div>

                    </div>
                    <div class="w-full h-12 lg:h-[71px] bg-[#E8C597] rounded-[10px] pt-4 lg:pt-6 my-5 text-center">
                        <div class="flex justify-center text-[16px] font-light">
                            <p class="me-4 text-[12px] md:text-[14px] lg:text-[16px]">Deskripsi</p>
                            <p class="me-4 text-[12px] md:text-[14px] lg:text-[16px]">Usia Penyimpanan</p>
                            <p class="text-[12px] md:text-[14px] lg:text-[16px]">Kandunga Nutrisi</p>
                        </div>
                    </div>
                    <div class="my-7 lg:mb-5 lg:mt-10 ">
                        <p class="text-[12px] md:text-[14px] lg:text-[16px] mb-4">Tersedia dalam pilihan imperfect dan
                            konvensional. Tomat merah imperfect memiliki sedikit bercak pada kulitnya. Namun rasa dan
                            manfaatnya tetap sama. </p>
                        <p class="text-[11.5px] md:text-[14px] lg:text-[16px]">Warna kulit bervariasi antara merah
                            oranye hingga sedikit kehijauan. Rasanya segar dan kaya kandungan air. Cocok untuk salad,
                            jus, atau camilan. Produk ini dapat digunakan sebagai menu MPASI. Terdapat potensi
                            kelebihan/kekurangan gramasi +-10% per pack </p>
                    </div>
                    <div class="flex">
                        <a href="{{ url('/cart') }}"
                            class="md:w-[140px] lg:w-[208px] md:h-[47px] lg:h-[52px] bg-[#345E5C] text-white rounded-[10px] md:me-4 lg:me-4 hidden md:flex justify-center items-center   md:text-xs lg:text-lg">Beli
                            Sekarang
                        </a>
                        <a href="{{ url('/cart') }}">
                            <button
                                class="md:w-[140px] lg:w-[208px] md:h-[47px] lg:h-[52px] bg-[#E8C597] text-black rounded-[10px] hidden md:block md:text-xs lg:text-lg">Masukkan
                                Keranjang
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="w-full md:flex justify-between items-end mt-20 hidden">
                <div class="bg-peanut px-3 md:px-12 py-3 rounded-lg">
                    <ul class="flex gap-x-6 text-[14px] md:text-lg">
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
                <a href="{{ url('/shop') }}"
                    class="uppercase border-b-[1px] border-black px-1 font-light text-sm">semua</a>
            </div>
            <div class="md:flex justify-between items-center gap-x-3 hidden mt-10">

                @foreach ($product as $datas)
                    @if ($loop->iteration <= 5)
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
                @if ($loop->iteration <= 6)
                    <a href="{{ url('/cart') }}"
                        class="bg-white p-5 h-[12rem] w-40 rounded-xl flex flex-col justify-end items-center gap-y-4">
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
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
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
    <div class="my-14 lg:my-40 w-full flex justify-center items-center lg:px-20">
        <div
            class="relative bg-peanut py-6 px-4 lg:p-10 flex justify-center items-center lg:gap-x-10 rounded-2xl">
            <div>
                <div class="text-old-gray lg:w-80 flex flex-col gap-y-3 lg:gap-y-7">
                    <h1 class="font-semibold lg:text-4xl">Memastikan ketersediaan sepanjang tahun</h1>
                    <p class="font-light text-xs lg:text-sm">Berkomitmen pada dukungan terhadap petani lokal,
                        membentuk
                        jaringan ekonomi yang berkelanjutan</p>
                    <a href="{{ url('/about') }}"
                        class="border-b border-black text-sm lg:text-base lg:py-1 w-fit lg:font-light text-black">About
                        Us</a>
                </div>

                <div
                    class="bg-[#997764] scale-75 lg:scale-100 h-14 lg:h-fit w-48 lg:w-fit py-1 px-2 lg:p-3 rounded-xl flex justify-between items-center absolute -translate-y-12 lg:-translate-y-12 translate-x-36 lg:translate-x-52">
                    <div class="lg:h-fit w-10 lg:w-20 bg-white p-2 rounded-xl">
                        <img src="{{ asset('image/romaine-lettuce-leaf-vegetable-salad-leaf-lettuce-vegetable-98bb08e8b78390c60956d2f33ed33afa.png') }}"
                            alt="">
                    </div>

                    <div class="w-full h-full px-2 flex justify-between items-center gap-x-5 lg:gap-x-28">
                        <div
                            class="h-full lg:gap-y-6 flex flex-col justify-center lg:justify-between text-xs lg:text-sm text-white font-light">
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
                <img src="{{ asset('image/getty-images-TXgvWNoxNls-unsplash.jpg') }}"
                    class="h-full lg:h-fit w-full" alt="">
            </div>

            {{-- <div class="rounded-2xl h-20 w-20 overflow-hidden bg-cover bg-center bg-no-repeat" style="background: url({{ asset('image/getty-images-TXgvWNoxNls-unsplash.jpg') }})">

                    </div> --}}
        </div>
    </div>
</div>
<div class="flex z-10 fixed bottom-0 w-full">
    <a href="{{ url('/cart') }}"
        class="w-[150px] h-[40px] bg-[#E8C597] text-white md:hidden flex justify-center items-center">@include('components.svg.cart')</a>
    <a href="{{ url('/cart') }}"
        class="w-full bg-[#345E5C] text-white md:hidden flex justify-center items-center">Beli
        Sekarang</a>
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
                    <h1 class="text-2xl md:text-4xl font-semibold leading-8">Belanja lebih <br> hemat dan lebih
                        <br>puas
                    </h1>
                    <p class="text-xs md:text-lg">Mulai dari Rp.3000 per kg</p>
                </div>
                <div class="">
                    <a href="{{ url('/shop') }}">
                        <button
                            class="bg-green px-3 md:px-6 py-2 text-white font-light rounded-lg text-sm">Beli
                            Sekarang</button>
                    </a>
                </div>
                <div class="w-44 md:w-80 self-end absolute bottom-10 md:bottom-0">
                    <img src="{{ asset('image/organic-food-juice-vegetable-fruit-basket-vegetable-png-photos-6d5e358490722e7b06e5f983ba54fbb0.png') }}"
                        alt="">
                </div>
            </div>
            <div
                class="bg-[#D8EBE5] px-5 py-8 rounded-xl w-full h-full flex flex-col justify-between relative">
                <div class="text-old-gray flex flex-col gap-y-8">
                    <p class="font-bold text-black">Promo</p>
                    <h1 class="text-2xl md:text-4xl font-semibold leading-8">Penawaran<br> Menarik</h1>
                    <p class="text-xs mb-3 md:text-lg">Info lebih lanjut</p>
                </div>
                <div class="">
                    <a href="{{ url('/shop') }}">
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
</div>
</x-app-layout>

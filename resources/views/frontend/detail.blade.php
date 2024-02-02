<x-app-layout>
    @include('components.responsive-nav')
    <div class="h-[200vh]">
        <div class="mx-8">
            <div class="block md:flex">
                <div class="">
                    <img src="{{ url('product_thumbnail') . '/' . $product->first()->product_thumbnail }}" alt=""
                        class="w-[500px] ">
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
                    <div class="flex text-center my-5">
                        <div class="w-[100px] h-[52px] lg:w-[120px] lg:h-[72px] bg-[#F3E8E8] rounded-[10px]">
                            <h2 class="font-bold mt-1">Imperfect</h2>
                            <div class="flex text-[14px] ms-3 mt-1">
                                <p class="text-xs lg:text-sm">1 Kg</p>
                                <p class="ms-2 lg:ms-4 text-xs lg:text-sm">Rp.3000</p>
                            </div>
                        </div>
                        <div class="w-[100px] h-[52px] lg:w-[120px] lg:h-[72px] bg-[#EAD9CF] rounded-[10px] ms-3">
                            <h2 class="font-bold mt-1">Normal</h2>
                            <p class="text-xs lg:text-sm">1 kg</p>
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
                                class="md:w-[140px] lg:w-[208px] md:h-[47px] lg:h-[52px] bg-[#E8C597] text-white rounded-[10px] hidden md:block md:text-xs lg:text-lg">Masukkan
                                Keranjang
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            @include('components.satu')
            <div class="my-40 md:w-full flex justify-center items-center px-20">
                <div class="relative bg-peanut p-10 flex justify-center items-center gap-x-10 rounded-2xl">
                    <div>
                        <div class="text-old-gray w-80 flex flex-col gap-y-7">
                            <h1 class="font-semibold text-4xl">Memastikan ketersediaan sepanjang tahun</h1>
                            <p class="font-light text-sm">Berkomitmen pada dukungan terhadap petani lokal, membentuk
                                jaringan ekonomi yang berkelanjutan</p>
                            <a href="#" class="border-b border-black py-1 w-fit font-light text-black">About
                                Us</a>
                        </div>

                        <div
                            class="bg-[#997764] p-3 rounded-xl flex justify-between items-center absolute -translate-y-12 translate-x-52">
                            <div class="w-20 bg-white p-2 rounded-xl">
                                <img src="{{ asset('image/romaine-lettuce-leaf-vegetable-salad-leaf-lettuce-vegetable-98bb08e8b78390c60956d2f33ed33afa.png') }}"
                                    alt="">
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
                        <img src="{{ asset('image/getty-images-TXgvWNoxNls-unsplash.jpg') }}" class=""
                            alt="">
                    </div>
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
        @include('components.footer')
    </div>
</x-app-layout>

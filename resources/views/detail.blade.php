<x-app-layout>
    @include('components.nav')
    <div class="h-[200vh]">
        <div class="mx-8">
            <div class="block md:flex">
                <div class="">
                    <img src="{{ asset('image/Rectangle 118.png') }}" alt="" class="w-[500px] ">
                    <div class="flex mt-3 lg:mt-5">
                        <img src="{{ asset('image/Rectangle 132.png') }}" alt="" class="w-[90px] md:w-[100px] lg:w-40 me-3">
                        <img src="{{ asset('image/Rectangle 133.png') }}" alt="" class="w-[90px] md:w-[100px] lg:w-40 me-3">
                        <img src="{{ asset('image/Group 95.png') }}" alt="" class="w-[90px] md:w-[100px] lg:w-40">
                    </div>
                </div>
                <div class="md:w-[77%] md:ms-8 lg:w-[40%] lg:ms-16 mt-4">
                    <h1 class="text-[20px] lg:text-[40px]">Tomat</h1>
                    <p class="text-[15px] lg:text-[24px] lg:mt-7">Rp.5000 - Per Kg</p>
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
                        <p class="text-[12px] md:text-[14px] lg:text-[16px] mb-4">Tersedia dalam pilihan imperfect dan konvensional. Tomat merah imperfect memiliki sedikit bercak pada kulitnya. Namun rasa dan manfaatnya tetap sama. </p>
                        <p class="text-[11.5px] md:text-[14px] lg:text-[16px]">Warna kulit bervariasi antara merah oranye hingga sedikit kehijauan. Rasanya segar dan kaya kandungan air. Cocok untuk salad, jus, atau camilan. Produk ini dapat digunakan sebagai menu MPASI. Terdapat potensi kelebihan/kekurangan gramasi +-10% per pack </p>
                    </div>
                    <div class="flex">
                        <button class="md:w-[140px] lg:w-[208px] md:h-[47px] lg:h-[52px] bg-[#345E5C] text-white rounded-[10px] md:me-4 lg:me-4 hidden md:block md:text-xs lg:text-lg">Beli Sekarang</button>
                        <button class="md:w-[140px] lg:w-[208px] md:h-[47px] lg:h-[52px] bg-[#E8C597] text-white rounded-[10px] hidden md:block md:text-xs lg:text-lg">Masukkan Keranjang</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex z-10 fixed bottom-0 w-full">
            <button class="w-[150px] h-[40px] bg-[#E8C597] text-white md:hidden flex justify-center items-center">@include('components.svg.cart')</button>
            <button class="w-full bg-[#345E5C] text-white md:hidden block">Beli Sekarang</button>
        </div>
    </div>
</x-app-layout>

<x-app-layout>
    @include('components.nav')
    <div class="mx-8">
        <div class="flex">
            <div class="">
                <img src="{{ asset('image/Rectangle 118.png') }}" alt="" class="w-[500px]">
                <div class="flex lg:mt-5">
                    <img src="{{ asset('image/Rectangle 132.png') }}" alt="" class="w-40 lg:me-3">
                    <img src="{{ asset('image/Rectangle 133.png') }}" alt="" class="w-40 lg:me-3">
                    <img src="{{ asset('image/Group 95.png') }}" alt="" class="w-40">
                </div>
            </div>
            <div class="lg:w-[40%] lg:ms-16">
                <h1 class="text-[40px]">Tomat</h1>
                <p class="text-[24px] lg:mt-7">Rp.5000 - Per Kg</p>
                <div class="flex text-center lg:mt-5">
                    <div class="lg:w-[120px] lg:h-[72px] bg-[#F3E8E8] rounded-[10px]">
                        <h2 class="font-bold mt-1">Imperfect</h2>
                        <div class="flex text-[14px] ms-3 mt-3">
                            <p>1 Kg</p>
                            <p class="lg:ms-4">Rp.3000</p>
                        </div>
                    </div>
                    <div class="lg:w-[120px] lg:h-[72px] bg-[#EAD9CF] rounded-[10px] lg:ms-3">
                        <h2>Normal</h2>
                        <p>1 Kg</p>
                    </div>
                </div>
                <div class="w-[433px] h-[71px] bg-[#E8C597] rounded-[10px] lg:pt-6 lg:my-5">
                    <div class="flex justify-center text-[16px] font-light">
                        <p class="me-4">Deskripsi</p>
                        <p class="me-4">Usia Penyimpanan</p>
                        <p class="">Kandunga Nutrisi</p>
                    </div>
                </div>
                <div class="">
                    <p class="text-[12px] lg:mb-4 lg:mt-10">Tersedia dalam pilihan imperfect dan konvensional. Tomat merah imperfect memiliki sedikit bercak pada kulitnya. Namun rasa dan manfaatnya tetap sama. </p>
                    <p class="text-[11.5px] lg:mb-8">Warna kulit bervariasi antara merah oranye hingga sedikit kehijauan. Rasanya segar dan kaya kandungan air. Cocok untuk salad, jus, atau camilan. Produk ini dapat digunakan sebagai menu MPASI. Terdapat potensi kelebihan/kekurangan gramasi +-10% per pack </p>
                </div>
                <div class="">
                    <button class="lg:w-[208px] lg:h-[52px] bg-[#345E5C] text-white rounded-[10px] lg:me-4">Beli Sekarang</button>
                    <button class="lg:w-[208px] lg:h-[52px] bg-[#E8C597] text-white rounded-[10px]">Masukkan Keranjang</button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

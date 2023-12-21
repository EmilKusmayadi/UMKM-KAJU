<div class="md:my-20 w-full flex justify-center items-center md:px-20">

    <div class="relative bg-peanut p-10 flex justify-center items-center md:gap-x-10 rounded-2xl">
        <div>
            <div class="text-old-gray w-70 flex flex-col gap-y-7">
                <h1 class="font-semibold text-[16px] md:text-4xl">Memastikan <br> ketersediaan <br> sepanjang tahun</h1>
                <p class="font-light text-[10px] md:text-sm">Berkomitmen pada dukungan terhadap petani lokal, membentuk jaringan ekonomi yang berkelanjutan</p>
                <a href="#" class="border-b border-black py-1 w-fit font-light text-black text-[8px] md:text-[16px]">About Us</a>
            </div>

            <div class="bg-[#997764] p-3 rounded-xl flex justify-around md:justify-between items-center absolute -translate-y-12 translate-x-52">
                <div class="w-0 md:w-20 bg-white p-2 rounded-xl">
                    <img src="{{ asset('image/romaine-lettuce-leaf-vegetable-salad-leaf-lettuce-vegetable-98bb08e8b78390c60956d2f33ed33afa.png') }}" alt="">
                </div>

                <div class="w-full h-full px-2 flex justify-between items-center md:gap-x-28">
                    <div class="h-full gap-y-6 flex flex-col justify-between text-sm text-white font-light">
                        <h3>Selada</h3>
                        <h3>Rp.5000</h3>
                    </div>

                    <div class="text-white">
                        @include('components.svg.cart-white')
                    </div>
                </div>
            </div>
        </div>
        <div class="rounded-2xl overflow-hidden w-[121px] h-[155px] md:h-full md:w-[40vw]">
            <img src="{{ asset('image/getty-images-TXgvWNoxNls-unsplash.jpg') }}" class="" alt="">
        </div>
    </div>
</div>

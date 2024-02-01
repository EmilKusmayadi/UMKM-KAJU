<x-app-layout>
    @include('components.nav')
    <div class="mx-8">
        <h1 class="text-2xl my-10">Keranjang Belanja</h1>
        <div class="md:flex">
            <div class="md:w-[754px] pb-6 md:pb-0 md:h-[449px] border border-black rounded-lg">
                <div class="flex justify-evenly md:justify-around">
                    <div class="">
                        <p class="mt-5 text-sm md:text-xl">Name</p>
                        <div class="flex mt-8">
                            <div class="w-10 md:w-20 bg-white p-2 rounded-xl">
                                <img src="{{ asset('image/romaine-lettuce-leaf-vegetable-salad-leaf-lettuce-vegetable-98bb08e8b78390c60956d2f33ed33afa.png') }}"
                                    alt="">
                            </div>
                            <div class="ms-5 md:ms-10">
                                <p class="text-xs md:text-sm">Selada</p>
                                <p class="text-xs md:text-sm">1Kg</p>
                            </div>
                        </div>
                        <div class="flex mt-10">
                            <div class="w-10 md:w-20 bg-white p-2 rounded-xl">
                                <img src="{{ asset('image/cherry-tomato-vegetable-pizza-tomato-png-image-picture-download-1576239854cd1f0dbed9d087d0c87744.png') }}"
                                    alt="">
                            </div>
                            <div class="ms-5 md:ms-10">
                                <p class="text-xs md:text-sm">Tomato</p>
                                <p class="text-xs md:text-sm">1Kg</p>
                            </div>
                        </div>
                        <div class="flex mt-10">
                            <div class="w-10 md:w-20 bg-white p-2 rounded-xl">
                                <img src="{{ asset('image/bell-pepper-stuffed-peppers-food-vegetable-fruit-vegetable-6e2c9c6b8cab99b613caf45b442d1340.png') }}"
                                    alt="">
                            </div>
                            <div class="ms-5 md:ms-10">
                                <p class="text-xs md:text-sm">Paprika</p>
                                <p class="text-xs md:text-sm">1Kg</p>
                            </div>
                        </div>
                    </div>

                    <div class="">
                        <p class="mt-5 text-sm md:text-xl">Quantity</p>
                        <div class="flex justify-around border border-black rounded-full mt-10 md:mt-14 md:w-20">
                            <button class="text-xs md:text-sm">+</button>
                            <p class="text-xs md:text-sm">4</p>
                            <button class="text-xs md:text-sm">-</button>
                        </div>
                        <div class="flex justify-around border border-black rounded-full mt-16 md:mt-24">
                            <button class="text-xs md:text-sm">+</button>
                            <p class="text-xs md:text-sm">4</p>
                            <button class="text-xs md:text-sm">-</button>
                        </div>
                        <div class="flex justify-around border border-black rounded-full mt-16 md:mt-[6.8rem]">
                            <button class="text-xs md:text-sm">+</button>
                            <p class="text-xs md:text-sm">4</p>
                            <button class="text-xs md:text-sm">-</button>
                        </div>
                    </div>

                    <div class="">
                        <p class="mt-5 text-sm md:text-xl">Total</p>
                        <div class=" mt-10 md:mt-14">
                            <p class="text-xs md:text-sm">Rp.20.000</p>
                        </div>
                        <div class=" mt-16 md:mt-24">
                            <p class="text-xs md:text-sm">Rp.20.000</p>
                        </div>
                        <div class=" mt-16 md:mt-[6.8rem]">
                            <p class="text-xs md:text-sm">Rp.20.000</p>
                        </div>
                    </div>

                    <div class="">
                        <p class="mt-5 text-sm md:text-xl">Action</p>
                        <div class="w-5 md:15 mt-10 md:mt-14">
                            <img class="" src="{{ asset('../image/delete.svg') }}" alt="">
                        </div>
                        <div class="w-5 md:15 mt-14 md:mt-[5.5rem]">
                            <img class="" src="{{ asset('../image/delete.svg') }}" alt="">
                        </div>
                        <div class="w-5 md:15 mt-16 md:mt-[6.3rem]">
                            <img class="" src="{{ asset('../image/delete.svg') }}" alt=""
                                class="cursor-pointer">
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full mt-10 md:mt-0 md:w-[420px] h-[448px] border border-black rounded-lg md:ms-10">
                <div class="">
                    <div class="mt-5">
                        <p class="ms-14 text-xl">Total Belanja</p>
                    </div>
                    <div class="flex justify-evenly mt-10">
                        <button class="border border-black rounded-full py-1 px-5">Discount Number</button>
                        <button class="border border-black rounded-full py-1 px-5">Apply</button>
                    </div>
                    <div class="flex justify-around mt-10">
                        <div class="">
                            <p class="mt-5 text-sm">Sub Total</p>
                            <p class="mt-5 text-sm">Diskon</p>
                            <p class="mt-5 text-sm">Biaya Pengiriman</p>
                            <p class="mt-5 font-bold text-lg">Total</p>
                        </div>
                        <div class="">
                            <p class="mt-5 text-sm">Rp.60.000</p>
                            <p class="mt-5 text-sm">Rp.0</p>
                            <p class="mt-5 text-sm">Rp.5000</p>
                            <p class="mt-5 text-lg">Rp.65.000</p>
                        </div>
                    </div>
                    <div class="text-center mt-10">
                        <a href="{{ url('/success') }}" class="">
                            <button class="bg-black text-white font-bold rounded-full py-1 px-16">Beli</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="pb-10">
            <h1 class="text-2xl mt-10 md:mt-10 md:mb-10">Pilih Pembayaran</h1>
            <div class="md:flex">
                <div class="mt-5 md:mt-20">
                    <div class="">
                        <button class="border border-black rounded-lg py-1 ps-5 md:pe-60 pe-8 md:py-5">Transfer
                            Bank</button>
                        <button
                            class="border border-black rounded-lg py-1 ps-5 md:pe-[19.7rem] ms-4 pe-24 md:py-5">QRIS</button>
                    </div>
                    <div class="mt-4">
                        <button
                            class="border border-black rounded-lg py-1 ps-5 md:pe-[17rem] pe-16 md:py-5">Alfamart</button>
                        <button
                            class="border border-black rounded-lg py-1 ps-5 md:pe-[19.3rem] ms-5 md:ms-4 pe-[84px] md:py-5">Paypal</button>
                    </div>
                </div>
                <div class="border border-black rounded-lg py-2 md:w-[420px] md:ms-8 mt-10 md:0">
                    <p class="ms-7 md:ms-12 my-5 font-semibold">Kode Alfamart</p>
                    <div class="flex justify-around">
                        <div class="">
                            <p class="pb-3">Code</p>
                            <p>Sisa Waktu</p>
                        </div>
                        <div class="pb-5">
                            <p class="pb-3">ZVJGH10000789</p>
                            <p>23:50</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

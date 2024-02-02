<x-app-layout>
    @include('components.responsive-nav')
    <div class="mx-4 lg:mx-8">
        <h1 class="text-2xl mt-10 mb-5">Keranjang Belanja</h1>
        <div class="md:flex gap-x-10">
            <div class="md:w-full pb-6 md:pb-0 md:h-[449px] border border-black rounded-lg">
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
                        <p class="mt-5 text-sm text-center md:text-xl">Total</p>
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
            <div class="w-full mt-6 md:mt-0 md:w-[35rem] h-[448px] border border-black rounded-lg">
                <div class="">
                    <div class="mt-5">
                        <p class="ms-6 lg:ms-14 text-xl">Total Belanja</p>
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
            <h1 class="text-2xl mt-10 md:mt-6">Pilih Pembayaran</h1>
            <div class="md:flex items-end w-full lg:gap-x-8 mt-5 lg:mt-0">

                <div class="grid grid-cols-2 gap-y-4 lg:gap-y-6 gap-x-3 lg:gap-x-5 w-full">
                    <button class="border text-start h-fit border-black rounded-lg text-sm lg:text-base py-2 md:py-4 px-4 lg:px-10">Transfer
                        Bank</button>
                    <button class="border text-start h-fit w-full border-black rounded-lg text-sm lg:text-base py-2 md:py-4 px-4 lg:px-10">
                        Alfamart</button>
                    <button class="border text-start h-fit w-full border-black rounded-lg text-sm lg:text-base py-2 md:py-4 px-4 lg:px-10">QRIS</button>
                    <button class="border text-start h-fit w-full border-black rounded-lg text-sm lg:text-base py-2 md:py-4 px-4 lg:px-10">Paypal</button>
                </div>
                <div class="border border-black rounded-lg py-2 lg:min-w-[23rem] md:min-w-96 px-8 mt-6 lg:mt-10">
                    <p class="my-5 font-semibold">Kode Alfamart</p>
                    <div class="flex justify-between w-full gap-x-6 text-sm lg:text-base">
                        <div class="">
                            <p class="pb-3">Code</p>
                            <p>Sisa Waktu</p>
                        </div>
                        <div class="pb-5 lg:text-end">
                            <p class="pb-3">ZVJGH10000789</p>
                            <p>23:50</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

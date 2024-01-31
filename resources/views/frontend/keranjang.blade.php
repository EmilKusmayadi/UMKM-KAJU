<x-app-layout>
    @include('components.nav')
    <div class="mx-8 h-[300vh]">
        <h1 class="text-2xl ms-7 my-10">Keranjang Belanja</h1>
        <div class="flex">
            <div class="w-[754px] h-[449px] border border-black rounded-lg">
                <div class="flex justify-around">
                    <div class="">
                        <p class="mt-5 text-xl">Name</p>
                        <div class="flex mt-8">
                            <div class="w-20 bg-white p-2 rounded-xl">
                                <img src="{{ asset('image/romaine-lettuce-leaf-vegetable-salad-leaf-lettuce-vegetable-98bb08e8b78390c60956d2f33ed33afa.png') }}"
                                    alt="">
                            </div>
                            <div class="ms-10">
                                <p>Selada</p>
                                <p>1Kg</p>
                            </div>
                        </div>
                        <div class="flex mt-10">
                            <div class="w-20 bg-white p-2 rounded-xl">
                                <img src="{{ asset('image/romaine-lettuce-leaf-vegetable-salad-leaf-lettuce-vegetable-98bb08e8b78390c60956d2f33ed33afa.png') }}"
                                    alt="">
                            </div>
                            <div class="ms-10">
                                <p>Tomato</p>
                                <p>1Kg</p>
                            </div>
                        </div>
                        <div class="flex mt-10">
                            <div class="w-20 bg-white p-2 rounded-xl">
                                <img src="{{ asset('image/romaine-lettuce-leaf-vegetable-salad-leaf-lettuce-vegetable-98bb08e8b78390c60956d2f33ed33afa.png') }}"
                                    alt="">
                            </div>
                            <div class="ms-10">
                                <p>Paprika</p>
                                <p>1Kg</p>
                            </div>
                        </div>
                    </div>

                    <div class="">
                        <p class="mt-5 text-xl">Quantity</p>
                        <div class="flex justify-around border border-black rounded-full mt-14 w-20">
                            <button>+</button>
                            <p>4</p>
                            <button>-</button>
                        </div>
                        <div class="flex justify-around border border-black rounded-full mt-24">
                            <button>+</button>
                            <p>4</p>
                            <button>-</button>
                        </div>
                        <div class="flex justify-around border border-black rounded-full mt-[6.8rem]">
                            <button>+</button>
                            <p>4</p>
                            <button>-</button>
                        </div>
                    </div>

                    <div class="">
                        <p class="mt-5 text-xl">Total</p>
                        <div class="mt-14">
                            <p>Rp.20.000</p>
                        </div>
                        <div class="mt-24">
                            <p>Rp.20.000</p>
                        </div>
                        <div class="mt-[6.8rem]">
                            <p>Rp.20.000</p>
                        </div>
                    </div>

                    <div class="">
                        <p class="mt-5 text-xl">Action</p>
                        <div class="mt-14">
                            <img src="{{ asset('../image/delete.svg') }}" alt="">
                        </div>
                        <div class="mt-[5.5rem]">
                            <img src="{{ asset('../image/delete.svg') }}" alt="">
                        </div>
                        <div class="mt-[6.3rem]">
                            <img src="{{ asset('../image/delete.svg') }}" alt="" class="cursor-pointer">
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-[420px] h-[448px] border border-black rounded-lg ms-10">
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
                        <button class="bg-black text-white font-bold rounded-full py-1 px-16">Beli</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="">
            <h1 class="text-2xl my-10">Pilih Pembayaran</h1>
            <div class="flex">
                <div class="mt-20">
                    <div class="">
                        <button class="border border-black rounded-lg py-1 ps-5 pe-60">Transfer Bank</button>
                        <button class="border border-black rounded-lg py-1 ps-5 pe-[19.7rem] ms-4">QRIS</button>
                    </div>
                    <div class="mt-4">
                        <button class="border border-black rounded-lg py-1 ps-5 pe-[17rem]">Alfamart</button>
                        <button class="border border-black rounded-lg py-1 ps-5 pe-[19.3rem] ms-4">Paypal</button>
                    </div>
                </div>
                <div class="border border-black rounded-lg py-2 w-[420px] ms-8">
                    <p class="ms-12 my-5 font-semibold">Kode Alfamart</p>
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

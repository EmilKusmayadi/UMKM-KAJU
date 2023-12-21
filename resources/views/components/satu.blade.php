
<div class="text-old-gray w-full flex flex-col gap-y-10 lg:mt-24">
    <div class="w-full flex justify-between items-end">
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
        <a href="#" class="uppercase border-b-[1px] border-black px-1 font-light text-sm">semua</a>
    </div>

    <div class="grid justify-between items-center gap-3 grid-cols-2 lg:grid-cols-5">

        <div class="bg-white p-5 h-[17rem] w-full rounded-xl flex flex-col justify-end items-center gap-y-4">

            <div class="w-40">
                <img src="{{ asset('image/choy-sum-malabar-spinach-leaf-vegetable-vegetable-9bd9b6b779bb3e1bb3390ca0ac149cc7.png') }}" alt="">
            </div>

            <div class="flex justify-between items-center w-full">
                <div>
                    <h2 class="text-xl font-normal">Bayam</h2>
                    <p class="font-light text-[#9AAF43]">Rp.5000</p>
                </div>

                <div class="h-9 w-9 grid place-items-center rounded-xl bg-peanut">
                    <a href="#">
                        @include('components.svg.small-cart')
                    </a>
                </div>
            </div>

        </div>

        <div class="bg-white p-5 h-[17rem] w-full rounded-xl flex flex-col justify-end items-center gap-y-4">

            <div class="w-40">
                <img src="{{ asset('image/bell-pepper-stuffed-peppers-food-vegetable-fruit-vegetable-6e2c9c6b8cab99b613caf45b442d1340.png') }}" alt="">
            </div>

            <div class="flex justify-between items-center w-full">
                <div>
                    <h2 class="text-xl font-normal">Paprika</h2>
                    <p class="font-light text-[#9AAF43]">Rp.5000</p>
                </div>

                <div class="h-9 w-9 grid place-items-center rounded-xl bg-peanut">
                    <a href="#">
                        @include('components.svg.small-cart')
                    </a>
                </div>
            </div>

        </div>

        <div class="bg-white p-5 h-[17rem] w-full rounded-xl flex flex-col justify-end items-center gap-y-4">

            <div class="w-40">
                <img src="{{ asset('image/cherry-tomato-vegetable-pizza-tomato-png-image-picture-download-1576239854cd1f0dbed9d087d0c87744.png') }}" alt="">
            </div>

            <div class="flex justify-between items-center w-full">
                <div>
                    <h2 class="text-xl font-normal">Tomat</h2>
                    <p class="font-light text-[#9AAF43]">Rp.5000</p>
                </div>

                <div class="h-9 w-9 grid place-items-center rounded-xl bg-peanut">
                    <a href="#">
                        @include('components.svg.small-cart')
                    </a>
                </div>
            </div>

        </div>

        <div class="bg-white p-5 h-[17rem] w-full rounded-xl flex flex-col justify-end items-center gap-y-4">

            <div class="w-40">
                <img src="{{ asset('image/romaine-lettuce-leaf-vegetable-salad-leaf-lettuce-vegetable-98bb08e8b78390c60956d2f33ed33afa.png') }}" alt="">
            </div>

            <div class="flex justify-between items-center w-full">
                <div>
                    <h2 class="text-xl font-normal">Selada</h2>
                    <p class="font-light text-[#9AAF43]">Rp.5000</p>
                </div>

                <div class="h-9 w-9 grid place-items-center rounded-xl bg-peanut">
                    <a href="#">
                        @include('components.svg.small-cart')
                    </a>
                </div>
            </div>

        </div>

        <div class="bg-white p-5 h-[17rem] w-full rounded-xl flex flex-col justify-end items-center gap-y-4">

            <div class="w-40">
                <img src="{{ asset('image/cauliflower-cabbage-vegetable-fruit-food-cauliflower-2f33f5a41d18c5b6041ee7f8bc37683c.png') }}" alt="">
            </div>

            <div class="flex justify-between items-center w-full">
                <div>
                    <h2 class="text-xl font-normal">Kembang Kol</h2>
                    <p class="font-light text-[#9AAF43]">Rp.5000</p>
                </div>

                <div class="h-9 w-9 grid place-items-center rounded-xl bg-peanut">
                    <a href="#">
                        @include('components.svg.small-cart')
                    </a>
                </div>
            </div>

        </div>

        {{-- hilang 1 (hidden kalo desktop) --}}
        <div class="lg:hidden bg-white p-5 h-[17rem] w-full rounded-xl flex flex-col justify-end items-center gap-y-4">

            <div class="w-40">
                <img src="{{ asset('image/choy-sum-malabar-spinach-leaf-vegetable-vegetable-9bd9b6b779bb3e1bb3390ca0ac149cc7.png') }}" alt="">
            </div>

            <div class="flex justify-between items-center w-full">
                <div>
                    <h2 class="text-xl font-normal">Bayam</h2>
                    <p class="font-light text-[#9AAF43]">Rp.5000</p>
                </div>

                <div class="h-9 w-9 grid place-items-center rounded-xl bg-peanut">
                    <a href="#">
                        @include('components.svg.small-cart')
                    </a>
                </div>
            </div>

        </div>

    </div>
</div>

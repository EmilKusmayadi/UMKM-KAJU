<x-app-layout>
    @include('components.nav')
    <div class="h-[250vh]">
        <div class="mx-[30px]">
            <div class="flex justify-between">
                <div class="font-medium">
                    <h1 class="text-[22px] md:text-[45px] lg:text-[60px] mt-20">Keajaiban dunia <br> sayuran hidroponik
                    </h1>
                </div>
                <div class="md:flex md:mt-16 lg:mt-28 hidden">
                    <button
                        class="md:w-[140px] lg:w-[208px] md:h-[52px] bg-[#345E5C] text-white rounded-[10px] md:me-4 lg:me-4 md:block md:text-xs lg:text-lg mt-20">Tentang
                        Kami</button>
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
                <button
                    class="w-[100px] md:w-[140px] lg:w-[208px] h-[35px] lg:h-[52px] bg-[#345E5C] text-white rounded-[5px] me-4 lg:me-4 md:block md:text-xs lg:text-lg text-[12px]">Tentang
                    Kami</button>
                <button
                    class="w-[100px] md:w-[140px] lg:w-[208px] h-[35px] lg:h-[52px] bg-[#E8C597] text-black rounded-[5px] md:block md:text-xs lg:text-lg text-[12px]">Selengkapnya</button>
            </div>
            <div class="flex justify-center lg:mt-20 mt-16">
                <button
                    class="w-[61px] md:w-[140px] lg:w-[208px] md:h-[47px] lg:h-[52px] bg-[#345E5C] text-white rounded-[5px] me-4 lg:me-4 md:block md:text-xs lg:text-lg text-[12px]">Shop</button>
                <button
                    class="w-[61px] md:w-[140px] lg:w-[208px] md:h-[47px] lg:h-[52px] border border-[#E8C597] text-black rounded-[5px] md:block md:text-xs lg:text-lg text-[12px]">Promo</button>
            </div>
            <div class="">
                <div class="flex justify-around mt-10 ms-[7rem]">
                    <div class="bg-[#E8C597] w-[303px] h-[400px] rounded-[20px]">
                        <h1 class="font-bold text-[32px] mt-12 mb-8 ms-[70px]">Kategori</h1>
                        <div class="ms-[70px]">
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
                        <div class="text-old-gray w-full flex flex-col gap-y-3">

                            <div class="block">
                                <div class="grid justify-between items-center gap-3 grid-cols-2 lg:grid-cols-5">

                                    <div
                                        class="bg-white p-5 h-[190px] w-full rounded-xl flex flex-col justify-end items-center gap-y-4">
                                        <div class="w-24">
                                            <img src="{{ asset('image/choy-sum-malabar-spinach-leaf-vegetable-vegetable-9bd9b6b779bb3e1bb3390ca0ac149cc7.png') }}"
                                                alt="">
                                        </div>
                                        <div class="flex justify-between items-center w-full">
                                            <div>
                                                <h2 class="text-sm font-normal">Bayam</h2>
                                                <p class="font-light text-sm text-[#9AAF43]">Rp.5000</p>
                                            </div>
                                            <div class="h-[2rem] w-[2rem] grid place-items-center rounded-xl bg-peanut">
                                                <a href="#">
                                                    <svg width="18" height="18" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M17 18C17.5304 18 18.0391 18.2107 18.4142 18.5858C18.7893 18.9609 19 19.4696 19 20C19 20.5304 18.7893 21.0391 18.4142 21.4142C18.0391 21.7893 17.5304 22 17 22C16.4696 22 15.9609 21.7893 15.5858 21.4142C15.2107 21.0391 15 20.5304 15 20C15 18.89 15.89 18 17 18ZM1 2H4.27L5.21 4H20C20.2652 4 20.5196 4.10536 20.7071 4.29289C20.8946 4.48043 21 4.73478 21 5C21 5.17 20.95 5.34 20.88 5.5L17.3 11.97C16.96 12.58 16.3 13 15.55 13H8.1L7.2 14.63L7.17 14.75C7.17 14.8163 7.19634 14.8799 7.24322 14.9268C7.29011 14.9737 7.3537 15 7.42 15H19V17H7C6.46957 17 5.96086 16.7893 5.58579 16.4142C5.21071 16.0391 5 15.5304 5 15C5 14.65 5.09 14.32 5.24 14.04L6.6 11.59L3 4H1V2ZM7 18C7.53043 18 8.03914 18.2107 8.41421 18.5858C8.78929 18.9609 9 19.4696 9 20C9 20.5304 8.78929 21.0391 8.41421 21.4142C8.03914 21.7893 7.53043 22 7 22C6.46957 22 5.96086 21.7893 5.58579 21.4142C5.21071 21.0391 5 20.5304 5 20C5 18.89 5.89 18 7 18ZM16 11L18.78 6H6.14L8.5 11H16Z"
                                                            fill="black" />
                                                    </svg>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="bg-white p-5 h-[190px] w-full rounded-xl flex flex-col justify-end items-center gap-y-4">
                                        <div class="w-24">
                                            <img src="{{ asset('image/bell-pepper-stuffed-peppers-food-vegetable-fruit-vegetable-6e2c9c6b8cab99b613caf45b442d1340.png') }}"
                                                alt="">
                                        </div>
                                        <div class="flex justify-between items-center w-full">
                                            <div>
                                                <h2 class="text-sm font-normal">Bayam</h2>
                                                <p class="font-light text-sm text-[#9AAF43]">Rp.5000</p>
                                            </div>
                                            <div class="h-[2rem] w-[2rem] grid place-items-center rounded-xl bg-peanut">
                                                <a href="#">
                                                    <svg width="18" height="18" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M17 18C17.5304 18 18.0391 18.2107 18.4142 18.5858C18.7893 18.9609 19 19.4696 19 20C19 20.5304 18.7893 21.0391 18.4142 21.4142C18.0391 21.7893 17.5304 22 17 22C16.4696 22 15.9609 21.7893 15.5858 21.4142C15.2107 21.0391 15 20.5304 15 20C15 18.89 15.89 18 17 18ZM1 2H4.27L5.21 4H20C20.2652 4 20.5196 4.10536 20.7071 4.29289C20.8946 4.48043 21 4.73478 21 5C21 5.17 20.95 5.34 20.88 5.5L17.3 11.97C16.96 12.58 16.3 13 15.55 13H8.1L7.2 14.63L7.17 14.75C7.17 14.8163 7.19634 14.8799 7.24322 14.9268C7.29011 14.9737 7.3537 15 7.42 15H19V17H7C6.46957 17 5.96086 16.7893 5.58579 16.4142C5.21071 16.0391 5 15.5304 5 15C5 14.65 5.09 14.32 5.24 14.04L6.6 11.59L3 4H1V2ZM7 18C7.53043 18 8.03914 18.2107 8.41421 18.5858C8.78929 18.9609 9 19.4696 9 20C9 20.5304 8.78929 21.0391 8.41421 21.4142C8.03914 21.7893 7.53043 22 7 22C6.46957 22 5.96086 21.7893 5.58579 21.4142C5.21071 21.0391 5 20.5304 5 20C5 18.89 5.89 18 7 18ZM16 11L18.78 6H6.14L8.5 11H16Z"
                                                            fill="black" />
                                                    </svg>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="bg-white p-5 h-[190px] w-full rounded-xl flex flex-col justify-end items-center gap-y-4">
                                        <div class="w-24">
                                            <img src="{{ asset('image/cherry-tomato-vegetable-pizza-tomato-png-image-picture-download-1576239854cd1f0dbed9d087d0c87744.png') }}"
                                                alt="">
                                        </div>
                                        <div class="flex justify-between items-center w-full">
                                            <div>
                                                <h2 class="text-sm font-normal">Bayam</h2>
                                                <p class="font-light text-sm text-[#9AAF43]">Rp.5000</p>
                                            </div>
                                            <div class="h-[2rem] w-[2rem] grid place-items-center rounded-xl bg-peanut">
                                                <a href="#">
                                                    <svg width="18" height="18" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M17 18C17.5304 18 18.0391 18.2107 18.4142 18.5858C18.7893 18.9609 19 19.4696 19 20C19 20.5304 18.7893 21.0391 18.4142 21.4142C18.0391 21.7893 17.5304 22 17 22C16.4696 22 15.9609 21.7893 15.5858 21.4142C15.2107 21.0391 15 20.5304 15 20C15 18.89 15.89 18 17 18ZM1 2H4.27L5.21 4H20C20.2652 4 20.5196 4.10536 20.7071 4.29289C20.8946 4.48043 21 4.73478 21 5C21 5.17 20.95 5.34 20.88 5.5L17.3 11.97C16.96 12.58 16.3 13 15.55 13H8.1L7.2 14.63L7.17 14.75C7.17 14.8163 7.19634 14.8799 7.24322 14.9268C7.29011 14.9737 7.3537 15 7.42 15H19V17H7C6.46957 17 5.96086 16.7893 5.58579 16.4142C5.21071 16.0391 5 15.5304 5 15C5 14.65 5.09 14.32 5.24 14.04L6.6 11.59L3 4H1V2ZM7 18C7.53043 18 8.03914 18.2107 8.41421 18.5858C8.78929 18.9609 9 19.4696 9 20C9 20.5304 8.78929 21.0391 8.41421 21.4142C8.03914 21.7893 7.53043 22 7 22C6.46957 22 5.96086 21.7893 5.58579 21.4142C5.21071 21.0391 5 20.5304 5 20C5 18.89 5.89 18 7 18ZM16 11L18.78 6H6.14L8.5 11H16Z"
                                                            fill="black" />
                                                    </svg>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="bg-white p-5 h-[190px] w-full rounded-xl flex flex-col justify-end items-center gap-y-4">
                                        <div class="w-24">
                                            <img src="{{ asset('image/romaine-lettuce-leaf-vegetable-salad-leaf-lettuce-vegetable-98bb08e8b78390c60956d2f33ed33afa.png') }}"
                                                alt="">
                                        </div>
                                        <div class="flex justify-between items-center w-full">
                                            <div>
                                                <h2 class="text-sm font-normal">Bayam</h2>
                                                <p class="font-light text-sm text-[#9AAF43]">Rp.5000</p>
                                            </div>
                                            <div class="h-[2rem] w-[2rem] grid place-items-center rounded-xl bg-peanut">
                                                <a href="#">
                                                    <svg width="18" height="18" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M17 18C17.5304 18 18.0391 18.2107 18.4142 18.5858C18.7893 18.9609 19 19.4696 19 20C19 20.5304 18.7893 21.0391 18.4142 21.4142C18.0391 21.7893 17.5304 22 17 22C16.4696 22 15.9609 21.7893 15.5858 21.4142C15.2107 21.0391 15 20.5304 15 20C15 18.89 15.89 18 17 18ZM1 2H4.27L5.21 4H20C20.2652 4 20.5196 4.10536 20.7071 4.29289C20.8946 4.48043 21 4.73478 21 5C21 5.17 20.95 5.34 20.88 5.5L17.3 11.97C16.96 12.58 16.3 13 15.55 13H8.1L7.2 14.63L7.17 14.75C7.17 14.8163 7.19634 14.8799 7.24322 14.9268C7.29011 14.9737 7.3537 15 7.42 15H19V17H7C6.46957 17 5.96086 16.7893 5.58579 16.4142C5.21071 16.0391 5 15.5304 5 15C5 14.65 5.09 14.32 5.24 14.04L6.6 11.59L3 4H1V2ZM7 18C7.53043 18 8.03914 18.2107 8.41421 18.5858C8.78929 18.9609 9 19.4696 9 20C9 20.5304 8.78929 21.0391 8.41421 21.4142C8.03914 21.7893 7.53043 22 7 22C6.46957 22 5.96086 21.7893 5.58579 21.4142C5.21071 21.0391 5 20.5304 5 20C5 18.89 5.89 18 7 18ZM16 11L18.78 6H6.14L8.5 11H16Z"
                                                            fill="black" />
                                                    </svg>

                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="grid justify-between items-center gap-3 grid-cols-2 lg:grid-cols-5">

                                <div
                                    class="bg-white p-5 h-[190px] w-full rounded-xl flex flex-col justify-end items-center gap-y-4">
                                    <div class="w-24">
                                        <img src="{{ asset('image/choy-sum-malabar-spinach-leaf-vegetable-vegetable-9bd9b6b779bb3e1bb3390ca0ac149cc7.png') }}"
                                            alt="">
                                    </div>
                                    <div class="flex justify-between items-center w-full">
                                        <div>
                                            <h2 class="text-sm font-normal">Bayam</h2>
                                            <p class="font-light text-sm text-[#9AAF43]">Rp.5000</p>
                                        </div>
                                        <div class="h-[2rem] w-[2rem] grid place-items-center rounded-xl bg-peanut">
                                            <a href="#">
                                                <svg width="18" height="18" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M17 18C17.5304 18 18.0391 18.2107 18.4142 18.5858C18.7893 18.9609 19 19.4696 19 20C19 20.5304 18.7893 21.0391 18.4142 21.4142C18.0391 21.7893 17.5304 22 17 22C16.4696 22 15.9609 21.7893 15.5858 21.4142C15.2107 21.0391 15 20.5304 15 20C15 18.89 15.89 18 17 18ZM1 2H4.27L5.21 4H20C20.2652 4 20.5196 4.10536 20.7071 4.29289C20.8946 4.48043 21 4.73478 21 5C21 5.17 20.95 5.34 20.88 5.5L17.3 11.97C16.96 12.58 16.3 13 15.55 13H8.1L7.2 14.63L7.17 14.75C7.17 14.8163 7.19634 14.8799 7.24322 14.9268C7.29011 14.9737 7.3537 15 7.42 15H19V17H7C6.46957 17 5.96086 16.7893 5.58579 16.4142C5.21071 16.0391 5 15.5304 5 15C5 14.65 5.09 14.32 5.24 14.04L6.6 11.59L3 4H1V2ZM7 18C7.53043 18 8.03914 18.2107 8.41421 18.5858C8.78929 18.9609 9 19.4696 9 20C9 20.5304 8.78929 21.0391 8.41421 21.4142C8.03914 21.7893 7.53043 22 7 22C6.46957 22 5.96086 21.7893 5.58579 21.4142C5.21071 21.0391 5 20.5304 5 20C5 18.89 5.89 18 7 18ZM16 11L18.78 6H6.14L8.5 11H16Z"
                                                        fill="black" />
                                                </svg>

                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="bg-white p-5 h-[190px] w-full rounded-xl flex flex-col justify-end items-center gap-y-4">
                                    <div class="w-24">
                                        <img src="{{ asset('image/bell-pepper-stuffed-peppers-food-vegetable-fruit-vegetable-6e2c9c6b8cab99b613caf45b442d1340.png') }}"
                                            alt="">
                                    </div>
                                    <div class="flex justify-between items-center w-full">
                                        <div>
                                            <h2 class="text-sm font-normal">Bayam</h2>
                                            <p class="font-light text-sm text-[#9AAF43]">Rp.5000</p>
                                        </div>
                                        <div class="h-[2rem] w-[2rem] grid place-items-center rounded-xl bg-peanut">
                                            <a href="#">
                                                <svg width="18" height="18" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M17 18C17.5304 18 18.0391 18.2107 18.4142 18.5858C18.7893 18.9609 19 19.4696 19 20C19 20.5304 18.7893 21.0391 18.4142 21.4142C18.0391 21.7893 17.5304 22 17 22C16.4696 22 15.9609 21.7893 15.5858 21.4142C15.2107 21.0391 15 20.5304 15 20C15 18.89 15.89 18 17 18ZM1 2H4.27L5.21 4H20C20.2652 4 20.5196 4.10536 20.7071 4.29289C20.8946 4.48043 21 4.73478 21 5C21 5.17 20.95 5.34 20.88 5.5L17.3 11.97C16.96 12.58 16.3 13 15.55 13H8.1L7.2 14.63L7.17 14.75C7.17 14.8163 7.19634 14.8799 7.24322 14.9268C7.29011 14.9737 7.3537 15 7.42 15H19V17H7C6.46957 17 5.96086 16.7893 5.58579 16.4142C5.21071 16.0391 5 15.5304 5 15C5 14.65 5.09 14.32 5.24 14.04L6.6 11.59L3 4H1V2ZM7 18C7.53043 18 8.03914 18.2107 8.41421 18.5858C8.78929 18.9609 9 19.4696 9 20C9 20.5304 8.78929 21.0391 8.41421 21.4142C8.03914 21.7893 7.53043 22 7 22C6.46957 22 5.96086 21.7893 5.58579 21.4142C5.21071 21.0391 5 20.5304 5 20C5 18.89 5.89 18 7 18ZM16 11L18.78 6H6.14L8.5 11H16Z"
                                                        fill="black" />
                                                </svg>

                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="bg-white p-5 h-[190px] w-full rounded-xl flex flex-col justify-end items-center gap-y-4">
                                    <div class="w-24">
                                        <img src="{{ asset('image/cherry-tomato-vegetable-pizza-tomato-png-image-picture-download-1576239854cd1f0dbed9d087d0c87744.png') }}"
                                            alt="">
                                    </div>
                                    <div class="flex justify-between items-center w-full">
                                        <div>
                                            <h2 class="text-sm font-normal">Bayam</h2>
                                            <p class="font-light text-sm text-[#9AAF43]">Rp.5000</p>
                                        </div>
                                        <div class="h-[2rem] w-[2rem] grid place-items-center rounded-xl bg-peanut">
                                            <a href="#">
                                                <svg width="18" height="18" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M17 18C17.5304 18 18.0391 18.2107 18.4142 18.5858C18.7893 18.9609 19 19.4696 19 20C19 20.5304 18.7893 21.0391 18.4142 21.4142C18.0391 21.7893 17.5304 22 17 22C16.4696 22 15.9609 21.7893 15.5858 21.4142C15.2107 21.0391 15 20.5304 15 20C15 18.89 15.89 18 17 18ZM1 2H4.27L5.21 4H20C20.2652 4 20.5196 4.10536 20.7071 4.29289C20.8946 4.48043 21 4.73478 21 5C21 5.17 20.95 5.34 20.88 5.5L17.3 11.97C16.96 12.58 16.3 13 15.55 13H8.1L7.2 14.63L7.17 14.75C7.17 14.8163 7.19634 14.8799 7.24322 14.9268C7.29011 14.9737 7.3537 15 7.42 15H19V17H7C6.46957 17 5.96086 16.7893 5.58579 16.4142C5.21071 16.0391 5 15.5304 5 15C5 14.65 5.09 14.32 5.24 14.04L6.6 11.59L3 4H1V2ZM7 18C7.53043 18 8.03914 18.2107 8.41421 18.5858C8.78929 18.9609 9 19.4696 9 20C9 20.5304 8.78929 21.0391 8.41421 21.4142C8.03914 21.7893 7.53043 22 7 22C6.46957 22 5.96086 21.7893 5.58579 21.4142C5.21071 21.0391 5 20.5304 5 20C5 18.89 5.89 18 7 18ZM16 11L18.78 6H6.14L8.5 11H16Z"
                                                        fill="black" />
                                                </svg>

                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="bg-white p-5 h-[190px] w-full rounded-xl flex flex-col justify-end items-center gap-y-4">
                                    <div class="w-24">
                                        <img src="{{ asset('image/romaine-lettuce-leaf-vegetable-salad-leaf-lettuce-vegetable-98bb08e8b78390c60956d2f33ed33afa.png') }}"
                                            alt="">
                                    </div>
                                    <div class="flex justify-between items-center w-full">
                                        <div>
                                            <h2 class="text-sm font-normal">Bayam</h2>
                                            <p class="font-light text-sm text-[#9AAF43]">Rp.5000</p>
                                        </div>
                                        <div class="h-[2rem] w-[2rem] grid place-items-center rounded-xl bg-peanut">
                                            <a href="#">
                                                <svg width="18" height="18" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M17 18C17.5304 18 18.0391 18.2107 18.4142 18.5858C18.7893 18.9609 19 19.4696 19 20C19 20.5304 18.7893 21.0391 18.4142 21.4142C18.0391 21.7893 17.5304 22 17 22C16.4696 22 15.9609 21.7893 15.5858 21.4142C15.2107 21.0391 15 20.5304 15 20C15 18.89 15.89 18 17 18ZM1 2H4.27L5.21 4H20C20.2652 4 20.5196 4.10536 20.7071 4.29289C20.8946 4.48043 21 4.73478 21 5C21 5.17 20.95 5.34 20.88 5.5L17.3 11.97C16.96 12.58 16.3 13 15.55 13H8.1L7.2 14.63L7.17 14.75C7.17 14.8163 7.19634 14.8799 7.24322 14.9268C7.29011 14.9737 7.3537 15 7.42 15H19V17H7C6.46957 17 5.96086 16.7893 5.58579 16.4142C5.21071 16.0391 5 15.5304 5 15C5 14.65 5.09 14.32 5.24 14.04L6.6 11.59L3 4H1V2ZM7 18C7.53043 18 8.03914 18.2107 8.41421 18.5858C8.78929 18.9609 9 19.4696 9 20C9 20.5304 8.78929 21.0391 8.41421 21.4142C8.03914 21.7893 7.53043 22 7 22C6.46957 22 5.96086 21.7893 5.58579 21.4142C5.21071 21.0391 5 20.5304 5 20C5 18.89 5.89 18 7 18ZM16 11L18.78 6H6.14L8.5 11H16Z"
                                                        fill="black" />
                                                </svg>

                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="grid justify-between items-center gap-3 grid-cols-2 lg:grid-cols-5">

                                <div
                                    class="bg-white p-5 h-[190px] w-full rounded-xl flex flex-col justify-end items-center gap-y-4">
                                    <div class="w-24">
                                        <img src="{{ asset('image/choy-sum-malabar-spinach-leaf-vegetable-vegetable-9bd9b6b779bb3e1bb3390ca0ac149cc7.png') }}"
                                            alt="">
                                    </div>
                                    <div class="flex justify-between items-center w-full">
                                        <div>
                                            <h2 class="text-sm font-normal">Bayam</h2>
                                            <p class="font-light text-sm text-[#9AAF43]">Rp.5000</p>
                                        </div>
                                        <div class="h-[2rem] w-[2rem] grid place-items-center rounded-xl bg-peanut">
                                            <a href="#">
                                                <svg width="18" height="18" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M17 18C17.5304 18 18.0391 18.2107 18.4142 18.5858C18.7893 18.9609 19 19.4696 19 20C19 20.5304 18.7893 21.0391 18.4142 21.4142C18.0391 21.7893 17.5304 22 17 22C16.4696 22 15.9609 21.7893 15.5858 21.4142C15.2107 21.0391 15 20.5304 15 20C15 18.89 15.89 18 17 18ZM1 2H4.27L5.21 4H20C20.2652 4 20.5196 4.10536 20.7071 4.29289C20.8946 4.48043 21 4.73478 21 5C21 5.17 20.95 5.34 20.88 5.5L17.3 11.97C16.96 12.58 16.3 13 15.55 13H8.1L7.2 14.63L7.17 14.75C7.17 14.8163 7.19634 14.8799 7.24322 14.9268C7.29011 14.9737 7.3537 15 7.42 15H19V17H7C6.46957 17 5.96086 16.7893 5.58579 16.4142C5.21071 16.0391 5 15.5304 5 15C5 14.65 5.09 14.32 5.24 14.04L6.6 11.59L3 4H1V2ZM7 18C7.53043 18 8.03914 18.2107 8.41421 18.5858C8.78929 18.9609 9 19.4696 9 20C9 20.5304 8.78929 21.0391 8.41421 21.4142C8.03914 21.7893 7.53043 22 7 22C6.46957 22 5.96086 21.7893 5.58579 21.4142C5.21071 21.0391 5 20.5304 5 20C5 18.89 5.89 18 7 18ZM16 11L18.78 6H6.14L8.5 11H16Z"
                                                        fill="black" />
                                                </svg>

                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="bg-white p-5 h-[190px] w-full rounded-xl flex flex-col justify-end items-center gap-y-4">
                                    <div class="w-24">
                                        <img src="{{ asset('image/bell-pepper-stuffed-peppers-food-vegetable-fruit-vegetable-6e2c9c6b8cab99b613caf45b442d1340.png') }}"
                                            alt="">
                                    </div>
                                    <div class="flex justify-between items-center w-full">
                                        <div>
                                            <h2 class="text-sm font-normal">Bayam</h2>
                                            <p class="font-light text-sm text-[#9AAF43]">Rp.5000</p>
                                        </div>
                                        <div class="h-[2rem] w-[2rem] grid place-items-center rounded-xl bg-peanut">
                                            <a href="#">
                                                <svg width="18" height="18" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M17 18C17.5304 18 18.0391 18.2107 18.4142 18.5858C18.7893 18.9609 19 19.4696 19 20C19 20.5304 18.7893 21.0391 18.4142 21.4142C18.0391 21.7893 17.5304 22 17 22C16.4696 22 15.9609 21.7893 15.5858 21.4142C15.2107 21.0391 15 20.5304 15 20C15 18.89 15.89 18 17 18ZM1 2H4.27L5.21 4H20C20.2652 4 20.5196 4.10536 20.7071 4.29289C20.8946 4.48043 21 4.73478 21 5C21 5.17 20.95 5.34 20.88 5.5L17.3 11.97C16.96 12.58 16.3 13 15.55 13H8.1L7.2 14.63L7.17 14.75C7.17 14.8163 7.19634 14.8799 7.24322 14.9268C7.29011 14.9737 7.3537 15 7.42 15H19V17H7C6.46957 17 5.96086 16.7893 5.58579 16.4142C5.21071 16.0391 5 15.5304 5 15C5 14.65 5.09 14.32 5.24 14.04L6.6 11.59L3 4H1V2ZM7 18C7.53043 18 8.03914 18.2107 8.41421 18.5858C8.78929 18.9609 9 19.4696 9 20C9 20.5304 8.78929 21.0391 8.41421 21.4142C8.03914 21.7893 7.53043 22 7 22C6.46957 22 5.96086 21.7893 5.58579 21.4142C5.21071 21.0391 5 20.5304 5 20C5 18.89 5.89 18 7 18ZM16 11L18.78 6H6.14L8.5 11H16Z"
                                                        fill="black" />
                                                </svg>

                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="bg-white p-5 h-[190px] w-full rounded-xl flex flex-col justify-end items-center gap-y-4">
                                    <div class="w-24">
                                        <img src="{{ asset('image/cherry-tomato-vegetable-pizza-tomato-png-image-picture-download-1576239854cd1f0dbed9d087d0c87744.png') }}"
                                            alt="">
                                    </div>
                                    <div class="flex justify-between items-center w-full">
                                        <div>
                                            <h2 class="text-sm font-normal">Bayam</h2>
                                            <p class="font-light text-sm text-[#9AAF43]">Rp.5000</p>
                                        </div>
                                        <div class="h-[2rem] w-[2rem] grid place-items-center rounded-xl bg-peanut">
                                            <a href="#">
                                                <svg width="18" height="18" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M17 18C17.5304 18 18.0391 18.2107 18.4142 18.5858C18.7893 18.9609 19 19.4696 19 20C19 20.5304 18.7893 21.0391 18.4142 21.4142C18.0391 21.7893 17.5304 22 17 22C16.4696 22 15.9609 21.7893 15.5858 21.4142C15.2107 21.0391 15 20.5304 15 20C15 18.89 15.89 18 17 18ZM1 2H4.27L5.21 4H20C20.2652 4 20.5196 4.10536 20.7071 4.29289C20.8946 4.48043 21 4.73478 21 5C21 5.17 20.95 5.34 20.88 5.5L17.3 11.97C16.96 12.58 16.3 13 15.55 13H8.1L7.2 14.63L7.17 14.75C7.17 14.8163 7.19634 14.8799 7.24322 14.9268C7.29011 14.9737 7.3537 15 7.42 15H19V17H7C6.46957 17 5.96086 16.7893 5.58579 16.4142C5.21071 16.0391 5 15.5304 5 15C5 14.65 5.09 14.32 5.24 14.04L6.6 11.59L3 4H1V2ZM7 18C7.53043 18 8.03914 18.2107 8.41421 18.5858C8.78929 18.9609 9 19.4696 9 20C9 20.5304 8.78929 21.0391 8.41421 21.4142C8.03914 21.7893 7.53043 22 7 22C6.46957 22 5.96086 21.7893 5.58579 21.4142C5.21071 21.0391 5 20.5304 5 20C5 18.89 5.89 18 7 18ZM16 11L18.78 6H6.14L8.5 11H16Z"
                                                        fill="black" />
                                                </svg>

                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="bg-white p-5 h-[190px] w-full rounded-xl flex flex-col justify-end items-center gap-y-4">
                                    <div class="w-24">
                                        <img src="{{ asset('image/romaine-lettuce-leaf-vegetable-salad-leaf-lettuce-vegetable-98bb08e8b78390c60956d2f33ed33afa.png') }}"
                                            alt="">
                                    </div>
                                    <div class="flex justify-between items-center w-full">
                                        <div>
                                            <h2 class="text-sm font-normal">Bayam</h2>
                                            <p class="font-light text-sm text-[#9AAF43]">Rp.5000</p>
                                        </div>
                                        <div class="h-[2rem] w-[2rem] grid place-items-center rounded-xl bg-peanut">
                                            <a href="#">
                                                <svg width="18" height="18" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M17 18C17.5304 18 18.0391 18.2107 18.4142 18.5858C18.7893 18.9609 19 19.4696 19 20C19 20.5304 18.7893 21.0391 18.4142 21.4142C18.0391 21.7893 17.5304 22 17 22C16.4696 22 15.9609 21.7893 15.5858 21.4142C15.2107 21.0391 15 20.5304 15 20C15 18.89 15.89 18 17 18ZM1 2H4.27L5.21 4H20C20.2652 4 20.5196 4.10536 20.7071 4.29289C20.8946 4.48043 21 4.73478 21 5C21 5.17 20.95 5.34 20.88 5.5L17.3 11.97C16.96 12.58 16.3 13 15.55 13H8.1L7.2 14.63L7.17 14.75C7.17 14.8163 7.19634 14.8799 7.24322 14.9268C7.29011 14.9737 7.3537 15 7.42 15H19V17H7C6.46957 17 5.96086 16.7893 5.58579 16.4142C5.21071 16.0391 5 15.5304 5 15C5 14.65 5.09 14.32 5.24 14.04L6.6 11.59L3 4H1V2ZM7 18C7.53043 18 8.03914 18.2107 8.41421 18.5858C8.78929 18.9609 9 19.4696 9 20C9 20.5304 8.78929 21.0391 8.41421 21.4142C8.03914 21.7893 7.53043 22 7 22C6.46957 22 5.96086 21.7893 5.58579 21.4142C5.21071 21.0391 5 20.5304 5 20C5 18.89 5.89 18 7 18ZM16 11L18.78 6H6.14L8.5 11H16Z"
                                                        fill="black" />
                                                </svg>

                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
            @include('components.empat')
        </div>
        @include('components.tiga')@include('components.footer')
    </div>
</x-app-layout>

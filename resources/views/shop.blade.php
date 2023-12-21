<x-app-layout>
    @include('components.nav')
    <div class="h-[200vh]">
        <div class="mx-[30px]">
            <div class="flex justify-between">
                <div class="font-medium text-center mx-auto">
                    <h1 class="text-[22px] md:text-[45px] lg:text-[60px]">Keajaiban dunia <br> sayuran hidroponik</h1>
                </div>
                <div class="md:flex md:mt-16 lg:mt-28 hidden">
                    <button class="md:w-[140px] lg:w-[208px] md:h-[52px] bg-[#345E5C] text-white rounded-[10px] md:me-4 lg:me-4 md:block md:text-xs lg:text-lg">Tentang Kami</button>
                    <button class="md:w-[140px] lg:w-[208px] md:h-[52px] bg-[#E8C597] text-black rounded-[10px] md:block md:text-xs lg:text-lg">Selengkapnya</button>
                </div>
            </div>
            <div class="flex justify-between lg:mt-10 mt-7">
                <div class="lg:mt-36 mt-12 me-5">
                    <p class="font-semibold text-[10px] lg:text-[16px]">Teknologin <br> Hidroponik</p>
                    <img src="{{ asset('image/shop2.png') }}" alt="" class="mt-5 lg:mt-10 w-[35px] lg:w-[64px]">
                </div>
                <div class="">
                    <img src="{{ asset('image/shop1.png') }}" alt="" class="lg:w-[932px] lg:h-[302px] hidden md:block">
                    <img src="{{ asset('image/mobile1.png') }}" alt="" class="lg:w-[932px] lg:h-[302px] block md:hidden">
                </div>
            </div>
            <div class="md:hidden lg:mt-28 my-5 flex justify-center">
                <button class="w-[100px] md:w-[140px] lg:w-[208px] h-[35px] lg:h-[52px] bg-[#345E5C] text-white rounded-[5px] me-4 lg:me-4 md:block md:text-xs lg:text-lg text-[12px]">Tentang Kami</button>
                <button class="w-[100px] md:w-[140px] lg:w-[208px] h-[35px] lg:h-[52px] bg-[#E8C597] text-black rounded-[5px] md:block md:text-xs lg:text-lg text-[12px]">Selengkapnya</button>
            </div>
            <div class="flex justify-center lg:mt-20 mt-16">
                <button class="w-[61px] md:w-[140px] lg:w-[208px] md:h-[47px] lg:h-[52px] bg-[#345E5C] text-white rounded-[5px] me-4 lg:me-4 md:block md:text-xs lg:text-lg text-[12px]">Shop</button>
                <button class="w-[61px] md:w-[140px] lg:w-[208px] md:h-[47px] lg:h-[52px] border border-[#E8C597] text-black rounded-[5px] md:block md:text-xs lg:text-lg text-[12px]">Promo</button>
            </div>
            @include('components.satu')
            @include('components.empat')
        </div>
        @include('components.tiga'
        )@include('components.footer')
    </div>
</x-app-layout>

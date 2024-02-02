<footer class="w-full bg-[#E8C597] pb-5 px-4 lg:p-10 flex justify-between items-end h-72 lg:h-72 xl:h-80 relative">
    <div
        class="w-full h-full absolute top-0 left-0 flex flex-col justify-between items-center pt-7 xl:pt-9 lg:pb-10 xl:pb-12">
        <div>
            <ul class="flex xl:text-lg gap-x-7 text-old-gray">
                <li><a href="{{ url('/shop') }}">Shop</a></li>
                <li><a href="{{ url('/shop') }}">Tentang Kami</a></li>
                <li><a href="#">Kontak</a></li>
            </ul>
        </div>
        <h1 class="text-8xl lg:text-9xl font-bold text-[#1C1D1C] tracking-normal">Kajuu</h1>
        <div class="lg:hidden mt-2"></div>
        <div class="lg:hidden mt-1"></div>
    </div>

    <div class="text-black">
        {{-- <h1>{{ $footer->first()->copyright }}</h1> --}}
        <h1 class="xl:text-lg">@2024 Kajuu</h1>
    </div>

    <div class="scale-90 lg:scale-100 gap-x-4 text-xs text-black flex">
        <a href="{{ $footer->first()->email }}">
            <img src="{{ asset('../image/email.svg') }}" alt="">
        </a>
        <a href="{{ $footer->first()->facebook }}">
            <img src="{{ asset('../image/facebook.svg') }}" alt="">
        </a>
        <a href="{{ $footer->first()->twitter }}">
            <img src="{{ asset('../image/twitter.svg') }}" alt="" class="pt-1">
        </a>
    </div>
</footer>

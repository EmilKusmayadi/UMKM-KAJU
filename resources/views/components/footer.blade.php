<footer class="w-full bg-peanut flex justify-between items-end px-6 pt-8 pb-12">
    <div class="text-black pr-5 text-xs md:text-xl w-[250px]">
        <h1>{{ $footer->first()->copyright }}</h1>
    </div>
    <div class="w-full flex flex-col justify-between items-center md:gap-y-16">
        <div>
            <ul class="w-[200px] flex md:gap-x-5 text-old-gray text-sm md:text-lg mb-5 md:mb-0">
                <li><a href="{{ url('/shop') }}" class="pe-3 md:pe-0">Shop</a></li>
                <li><a href="{{ url('/about') }}" class="pe-3 md:pe-0">Tentang Kami</a></li>
                <li><a href="#">Kontak</a></li>
            </ul>
        </div>
        <h1 class="text-3xl md:text-8xl font-bold text-[#1C1D1C]">Kajuu</h1>
    </div>
    <div class="w-[150px] text-xs md:text-2xl text-black flex justify-evenly">
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

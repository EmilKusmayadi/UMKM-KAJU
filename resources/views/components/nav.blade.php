<nav class="flex w-full justify-between items-end py-4 px-8">
    <div class="lg:flex items-center w-[200px] gap-x-4 hidden">
        <h3>
            <a href="{{ url('/shop') }}">Shop</a>
        </h3>
        <h3>
            <a href="{{ url('/about') }}">Tentang Kami</a>
        </h3>
    </div>

    <div class="w-full h-full flex justify-center items-center pe-16">
        <h1 class="text-3xl font-bold text-old-gray">
            <a href="{{ url('/') }}">
                Kajuu
            </a>
        </h1>
    </div>

    <div class="lg:flex items-center gap-x-8 hidden">
        <div>
            <a href="{{ url('/account') }}">
                @include('components.svg.people')
            </a>
        </div>
        <div>
            <a href="{{ url('/cart') }}">
                @include('components.svg.cart')
            </a>
        </div>
    </div>
    <div class="block lg:hidden">
        <a href="#">
            @include('components.svg.hamburger')
        </a>
    </div>
</nav>

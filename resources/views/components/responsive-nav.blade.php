<nav class="flex w-full justify-between items-end py-4 px-3 lg:px-8 relative z-50">
    <div class="lg:flex items-center gap-x-4 hidden z-40">
        <a href="/shop">Shop</a>
        <a href="/about">Tentang Kami</a>
    </div>

    <div class="px-3 lg:px-0 absolute w-full h-full flex justify-start lg:justify-center items-center top-0 left-0">
        <a href="/">
            <h1 class="text-xl lg:font-bold lg:text-3xl font-black text-old-gray">
                Kajuu
            </h1>
        </a>
    </div>

    <div class="lg:flex items-center gap-x-8 hidden z-40">
        <div>
            <a href="{{ url('/login-user') }}">
                @include('components.svg.people')
            </a>
        </div>
        <div>
            <a href="/shop">
                @include('components.svg.cart')
            </a>
        </div>
    </div>
    <div class="flex w-full justify-end lg:hidden">
        <a href="#" class="z-40 cursor-pointer">
            @include('components.svg.hamburger')
        </a>
    </div>
</nav>

<nav class="flex w-full justify-between items-end py-4 px-8 relative">
    <div class="lg:flex items-center gap-x-4 hidden">
        <h3>
            <a href="">Shop</a>
        </h3>
        <h3>
            <a href="">Tentang Kami</a>
        </h3>
    </div>

    <div class="absolute w-full h-full flex justify-center items-center top-0 left-0">
        <h1 class="text-3xl font-bold text-old-gray">
            <a href="">
                Kajuu
            </a>
        </h1>
    </div>

    <div class="lg:flex items-center gap-x-8 hidden">
        <div>
            <a href="#">
                @include('components.svg.people')
            </a>
        </div>
        <div>
            <a href="#">
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

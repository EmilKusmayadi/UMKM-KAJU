<nav class="flex justify-between items-end py-4 px-8">
    <div class="lg:flex items-center gap-x-4 hidden">
        <h3>
            <a href="">Shop</a>
        </h3>
        <h3>
            <a href="">Tentang Kami</a>
        </h3>
    </div>

    <h1 class="text-3xl font-bold text-old-gray">
        <a href="">
            Kajuu
        </a>
    </h1>

    <div class="lg:flex items-center gap-x-8 ml-10 hidden">
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

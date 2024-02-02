<x-app-layout>
    @include('components.responsive-nav')
    <div class="text-center mt-16 mb-14 lg:my-20">
        <div class="mb-5">
            <h1 class="text-2xl md:text-6xl">Pembayaran Berhasil</h1>
        </div>
        <div class="flex justify-center mb-28 md:mb-0 relative">
            <img src="{{ asset('../image/sapiens.png') }}" alt="" class="w-[522px]">
            <a href="{{ url('/') }}"
                class="bg-[#064E3B] text-white px-8 py-1 lg:px-12 lg:py-2 rounded-full absolute bottom-0 h-fit">Home</a>
        </div>
    </div>
    @include('components.responsive-footer')
</x-app-layout>

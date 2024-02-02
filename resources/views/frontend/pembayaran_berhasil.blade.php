<x-app-layout>
    @include('components.nav')
    <div class="text-center">
        <div class="mt-16 mb-14 md:mb-0 md:mt-6">
            <h1 class="text-2xl md:text-6xl">Pembayaran Berhasil</h1>
        </div>
        <div class="fle x justify-center mb-28 md:mb-0">
            <img src="{{ asset('../image/sapiens.png') }}" alt="" class="w-[522px]">
            <a href="{{ url('/') }}"
                class="bg-[#064E3B] text-white px-8 py-1 rounded-full absolute top-[82%] md:top-[92%]">Home</a>
        </div>
    </div>
    @include('components.footer')
</x-app-layout>

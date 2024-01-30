<x-app-layout>
    @include('components.nav')
    <div class="text-center">
        <div class="mt-6">
            <h1 class="text-6xl">Pembayaran Berhasil</h1>
        </div>
        <div class="flex justify-center">
            <img src="{{ asset('../image/sapiens.png') }}" alt="" class="w-[522px]">
            <button class="bg-[#064E3B] text-white px-8 py-1 rounded-full absolute bottom-4">Home</button>
        </div>
    </div>
    @include('components.footer')
</x-app-layout>

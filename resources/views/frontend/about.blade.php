<x-app-layout>
    @include('components.nav')
    <div class="mx-[2rem] h-[370vh]">
        {{-- START HERO --}}
        <div class="flex justify-between mt-7">
            <div class="">
                <h1 class="font-bold text-[50px]">Selamat Datang <br> Di Kaju</h1>
            </div>
            <div class="mt-16">
                <p>Kami berkomitmen untuk menghadirkan sayuran hidroponik <br> berkualitas tinggi dengan fokus pada
                    kesehatan dan <br> berkelanjutan</p>
            </div>
        </div>
        <div class="">
            <img src="{{ asset('../image/Rectangle353.png') }}" alt="" class="w-full">
        </div>
        {{-- END HERO --}}
        {{-- START KEISTIMEWAAN --}}
        <div class="">
            <div class="my-10">
                <h1 class="text-[#345E5C] font-bold text-[24px]">Keistimewaan sayuran <br> hidroponik Kami</h1>
            </div>
            <div class="flex justify-between">
                <div class="w-[390px] h-[199px] bg-[#E9ECF4] rounded-2xl p-3">
                    <div class="flex justify-between">
                        <div class="mt-6">
                            <h1 class="font-bold text-xl">Sistem Irigasi <br> Otomatis</h1>
                        </div>
                        <div class="">
                            <img src="{{ asset('../image/asset61.png') }}" alt="">
                        </div>
                    </div>
                    <p>Merancang, menginstal, dan memelihara <br> sistem irigasi otomatis agar tanaman <br> mendapatkan
                        air
                        dengan konsistensi tepat.</p>
                </div>
                <div class="w-[390px] h-[199px] bg-[#EAD9CF] rounded-2xl p-3">
                    <div class="flex justify-between">
                        <div class="mt-6 mb-5">
                            <h1 class="font-bold text-xl">Monitoring <br> Nutrisi</h1>
                        </div>
                        <div class="">
                            <img src="{{ asset('../image/Asset22.png') }}" alt="">
                        </div>
                    </div>
                    <p>Menyediakan layanan pemantauan nutrisi <br> tanaman hidroponik untuk memastikan<br> kebutuhan
                        nutrisi terpenuhi secara optimal.</p>
                </div>
                <div class="w-[390px] h-[199px] bg-[#F3E8E8] rounded-2xl p-3">
                    <div class="flex justify-between">
                        <div class="mt-6 mb-5">
                            <h1 class="font-bold text-xl">Pemantauan <br> Kesehatan Tanaman</h1>
                        </div>
                        <div class="">
                            <img src="{{ asset('../image/Asset 27.png') }}" alt="">
                        </div>
                    </div>
                    <p>Memberikan layanan pemantauan dan <br> diagnosis penyakit tanaman serta tindakan<br> pencegahan
                        yang di perlukan.</p>
                </div>
            </div>
        </div>
        {{-- END KEISTIMEWAAN --}}
        {{-- START VISI MISI --}}
        <div class="">
            <div class="text-center text-[32px] mt-28 mb-10">
                <h1>Hasil Hidroponik terbaik dari kebun <br> hidroponik terbaik</h1>
            </div>
            <div class="flex">
                <div class="">
                    <img src="{{ asset('image/getty-images-oIXoJSXuCpw-unsplash 2.png') }}" alt=""
                        class="w-[613px] h-[532px]">
                </div>
                <div class="bg-[#345E5C] h-[421px] w-[600px] rounded-xl text-white p-10 mt-14 absolute right-20">
                    <h1 class="font-bold text-[32px]">Visi & Misi Kajuu</h1>
                    <div class="mt-12">
                        <p class="text-[16px] mb-3">Visi</p>
                        <p class="text-[14px]">Menjadi pionir hidroponik pangkep dalam revolusi pertanian
                            hidroponikmenciptakan
                            masyarakat yang lebih sehat dan berkelanjutan melalui akses yang mudah terhadap sayuran
                            berkualitas tinggi. </p>
                    </div>
                    <div class="mt-10">
                        <p class="text-[16px] mb-3">Misi</p>
                        <p class="text-[14px]">Menyediakan produk sayuran hidroponik berkualitas tinggi yang mendukung
                            kesehatan dan
                            keberlajutan lingkungan.</p>
                    </div>
                </div>
            </div>
        </div>
        {{-- END VISI MISI --}}
        {{-- START jangka waktu --}}
        <div class="md:my-20 w-full flex justify-center items-center md:px-20">

            <div
                class="relative bg-peanut p-10 flex justify-center items-center md:gap-x-10 rounded-2xl w-[800px] h-[370px]">
                <div>
                    <div class="text-old-gray w-50 flex flex-col gap-y-7">
                        <h1 class="font-semibold text-[16px] md:text-4xl">Memastikan <br> ketersediaan <br> sepanjang
                            tahun</h1>
                        <p class="font-light text-[10px] md:text-sm">Berkomitmen pada dukungan terhadap petani lokal,
                            membentuk jaringan ekonomi yang berkelanjutan</p>
                        <a href="#"
                            class="border-b border-black py-1 w-fit font-light text-black text-[8px] md:text-[16px]">About
                            Us</a>
                    </div>

                    <div
                        class="bg-[#997764] p-3 rounded-xl flex justify-around md:justify-between items-center absolute -translate-y-12 translate-x-52">
                        <div class="w-0 md:w-20 bg-white p-2 rounded-xl">
                            <img src="{{ asset('image/romaine-lettuce-leaf-vegetable-salad-leaf-lettuce-vegetable-98bb08e8b78390c60956d2f33ed33afa.png') }}"
                                alt="">
                        </div>

                        <div class="w-full h-full px-2 flex justify-between items-center md:gap-x-28">
                            <div class="h-full gap-y-6 flex flex-col justify-between text-sm text-white font-light">
                                <h3>Selada</h3>
                                <h3>Rp.5000</h3>
                            </div>

                            <div class="text-white">
                                @include('components.svg.cart-white')
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rounded-2xl overflow-hidden h-[400px] md:h-full md:w-[40vw]">
                    <img src="{{ asset('image/jangkawaktu.png') }}" class="" alt="">
                </div>
            </div>
        </div>

        {{--  END jangka waktu --}}
    </div>
    {{-- START FOOTER --}}
    @include('components.footer')
    {{-- END FOOTER --}}
</x-app-layout>

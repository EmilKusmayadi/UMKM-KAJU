<x-app-layout>
    @include('components.nav')
    <div class="mx-[2rem] ">
        {{-- START HERO --}}
        <div class="md:flex justify-between mt-14 md:mt-5">
            <div class="">
                <h1 class="font-bold text-[30px] md:text-[40px]">{{ $about->first()->title }}</h1>
            </div>
            <div class="md:mt-16 md:mb-7 md:text-xl hidden md:block">
                <p>
                    Kami berkomitmen untuk menghadirkan sayuran hidroponik <br> berkualitas tinggi dengan fokus pada
                    kesehatan dan <br> keberlanjutan</p>
            </div>
            <div class="mb-6 md:mb-0 mt-5 block md:hidden">
                <p>

                    Kami berkomitmen untuk menghadirkan sayuran hidroponik <br> berkualitas tinggi dengan fokus pada
                    kesehatan dan <br> keberlanjutan
                </p>
            </div>
        </div>
        <div class="relative overflow-hidden flex justify-center items-center h-[40vh] md:h-[58vh] w-full">
            <img src="{{ url('about_image') . '/' . $about->first()->about_image }}" alt=""
                class="absolute -scale-x-100 w-full h-[250px] block bg-cover md:hidden">
            <img src="{{ url('about_image') . '/' . $about->first()->about_image }}" alt=""
                class="absolute -scale-x-100 w-full hidden md:block">
        </div>
        {{-- END HERO --}}
        {{-- START KEISTIMEWAAN --}}
        <div class="">
            <div class="my-10">
                <h1 class="text-[#345E5C] font-bold text-xl md:text-[24px]">Keistimewaan sayuran <br> hidroponik
                    Kami</h1>
            </div>
            <div class=" md:flex justify-between">
                <div class="md:w-[390px] h-[199px] bg-[#E9ECF4] rounded-2xl p-3 mb-7 md:mb-0">
                    <div class="flex justify-between">
                        <div class="mt-6">
                            <h1 class="font-bold text-lg">Sistem Irigasi <br> Otomatis</h1>
                        </div>
                        <div class="">
                            <img src="{{ asset('../image/asset61.png') }}" alt="">
                        </div>
                    </div>
                    <p class="text-sm">Merancang, menginstal, dan memelihara <br> sistem irigasi otomatis agar tanaman
                        <br> mendapatkan
                        air
                        dengan konsistensi tepat.
                    </p>
                </div>
                <div class="md:w-[390px] h-[199px] bg-[#EAD9CF] rounded-2xl p-3 mb-7 md:mb-0">
                    <div class="flex justify-between">
                        <div class="mt-6 mb-5">
                            <h1 class="font-bold text-lg md:text-xl">Monitoring <br> Nutrisi</h1>
                        </div>
                        <div class="">
                            <img src="{{ asset('../image/Asset22.png') }}" alt="">
                        </div>
                    </div>
                    <p class="text-sm">Menyediakan layanan pemantauan nutrisi <br> tanaman hidroponik untuk
                        memastikan<br> kebutuhan
                        nutrisi terpenuhi secara optimal.</p>
                </div>
                <div class="md:w-[390px] h-[199px] bg-[#F3E8E8] rounded-2xl p-3">
                    <div class="flex justify-between">
                        <div class="mt-6 mb-5">
                            <h1 class="font-bold text-lg md:text-xl">Pemantauan <br> Kesehatan Tanaman</h1>
                        </div>
                        <div class="">
                            <img src="{{ asset('../image/Asset 27.png') }}" alt="">
                        </div>
                    </div>
                    <p class="text-sm">Memberikan layanan pemantauan dan <br> diagnosis penyakit tanaman serta
                        tindakan<br> pencegahan
                        yang di perlukan.</p>
                </div>
            </div>
        </div>
        {{-- END KEISTIMEWAAN --}}
        {{-- START VISI MISI --}}
        <div class="">
            <div class="text-center text-xl md:text-[32px] mt-14 md:mt-28 mb-10">
                <h1>Hasil Hidroponik terbaik dari kebun <br> hidroponik terbaik</h1>
            </div>
            <div class="md:flex">
                <div class="">
                    <img src="{{ asset('image/getty-images-oIXoJSXuCpw-unsplash 2.png') }}" alt=""
                        class="md:w-[613px] md:h-[532px]">
                </div>
                <div
                    class="bg-[#345E5C] md:h-[421px] md:w-[600px] rounded-xl text-white p-10 mt-5 md:mt-14 md:absolute right-20">
                    <h1 class="font-bold text-base md:text-[32px]">Visi & Misi Kajuu</h1>
                    <div class="mt-12">
                        <p class="text-sm md:text-[16px] mb-3">Visi</p>
                        <p class="text-xs md:text-[14px]">Menjadi pionir hidroponik pangkep dalam revolusi pertanian
                            hidroponikmenciptakan
                            masyarakat yang lebih sehat dan berkelanjutan melalui akses yang mudah terhadap sayuran
                            berkualitas tinggi. </p>
                    </div>
                    <div class="mt-10">
                        <p class="text-sm md:text-[16px] mb-3">Misi</p>
                        <p class="text-xs md:text-[14px]">Menyediakan produk sayuran hidroponik berkualitas tinggi yang
                            mendukung
                            kesehatan dan
                            keberlajutan lingkungan.</p>
                    </div>
                </div>
            </div>
        </div>
        {{-- END VISI MISI --}}
        {{-- START jangka waktu --}}
        <div class=" my-32 w-full flex justify-center items-center px-20">
            <div class="relative bg-peanut p-10 flex justify-center items-center gap-x-10 rounded-2xl">
                <div>
                    <div class="text-old-gray w-80 flex flex-col gap-y-7">
                        <h1 class="font-semibold text-4xl">Memastikan ketersediaan sepanjang tahun</h1>
                        <p class="font-light text-sm">Berkomitmen pada dukungan terhadap petani lokal, membentuk
                            jaringan ekonomi yang berkelanjutan</p>
                        <a href="#" class="border-b border-black py-1 w-fit font-light text-black">About Us</a>
                    </div>

                    <div
                        class="bg-[#997764] p-3 rounded-xl flex justify-between items-center absolute -translate-y-12 translate-x-52">
                        <div class="w-20 bg-white p-2 rounded-xl">
                            <img src="{{ asset('image/bell-pepper-stuffed-peppers-food-vegetable-fruit-vegetable-6e2c9c6b8cab99b613caf45b442d1340.png') }}"
                                alt="">
                        </div>

                        <div class="w-full h-full px-2 flex justify-between items-center gap-x-28">
                            <div class="h-full gap-y-6 flex flex-col justify-between text-sm text-white font-light">
                                <h3>Paprika</h3>
                                <h3>Rp.5000</h3>
                            </div>

                            <div class="stroke-white !text-white">
                                @include('components.svg.cart')
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rounded-2xl overflow-hidden w-[40vw]">
                    <img src="{{ asset('image/getty-images-TXgvWNoxNls-unsplash.jpg') }}" class="" alt="">
                </div>
            </div>
        </div>

        {{--  END jangka waktu --}}
    </div>
    {{-- START FOOTER --}}
    @include('components.footer')
    {{-- END FOOTER --}}
</x-app-layout>

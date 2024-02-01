<x-app-layout>
    <div class="">
        @include('components.nav')
        <div class="md:flex justify-around mt-14 mb-7 mx-8">
            <div class="md:flex justify-around mt-14 mb-7 ">
                <div class="bg-[#E8DDC1] w-[303px] h-[386px] rounded-[20px] hidden md:block">
                    <h1 class="font-bold text-[32px] mt-12 mb-8 ms-[70px]">Menu Utama</h1>
                    <div class="ms-[70px]">
                        <p
                            class="text-[20px] mb-5 border border-b-black border-x-transparent border-t-transparent w-[150px]">
                            Akun</p>
                        <p
                            class="text-[20px] mb-5 border border-b-black border-x-transparent border-t-transparent w-[150px]">
                            Daftar Transaksi</p>
                        <p
                            class="text-[20px] mb-5 border border-b-black border-x-transparent border-t-transparent w-[150px]">
                            Alamat</p>
                        <p
                            class="text-[20px] mb-5 border border-b-black border-x-transparent border-t-transparent w-[150px]">
                            Keluar</p>
                    </div>
                </div>
                <div class="bg-peanut py-3 rounded-lg block md:hidden">
                    <ul class="flex justify-around">
                        <li class="font-bold">
                            <a href="#" class="text-sm">Akun</a>
                        </li>
                        <li class="font-light">
                            <a href="#" class="text-sm"> Daftar Transaksi</a>
                        </li>
                        <li class="font-light">
                            <a href="#" class="text-sm">Keluar</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class=" mb-16 md:mb-0">
                <h1 class="text-xl mb-5 mt-14 md:mb-9 md:text-[40px]">Informasi Akun</h1>
                <div class="md:w-[781px] md:h-[325px] h-[210px] bg-[#F5EFE9] rounded-lg">
                    <div class="flex md:pt-7">
                        <div class="ms-7 md:ms-16">
                            <p class="me-10 md:mt-6 mt-4 text-xs md:text-lg">Nama</p>
                            <p class="me-10 md:mt-6 mt-4 text-xs md:text-lg">Username</p>
                            <p class="me-10 md:mt-6 mt-4 text-xs md:text-lg">Email</p>
                            <p class="me-10 md:mt-6 mt-4 text-xs md:text-lg">Nomor Hp</p>
                        </div>
                        <div class="ms-10">
                            <p class="md:mt-6 mt-4 text-xs md:text-lg">Ardiansyah</p>
                            <p class="md:mt-6 mt-4 text-xs md:text-lg">ard77</p>
                            <p class="md:mt-6 mt-4 text-xs md:text-lg">ardiansyah@gmail.com</p>
                            <p class="md:mt-6 mt-4 text-xs md:text-lg">0894678576545</p>
                        </div>
                    </div>
                    <div class="flex justify-evenly md:justify-end md:me-10 mt-7">
                        <button class="bg-[#E8C597] md:px-8 px-4 py-1 rounded-full">Update Info</button>
                        <a href="{{ url('/') }}">
                            <button class="bg-[#212121] md:px-8 px-4 py-1 rounded-full text-white md:ms-6">Tutup
                                Akun</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('components.footer')
</x-app-layout>

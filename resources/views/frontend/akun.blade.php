<x-app-layout>
    @include('components.nav')
    <div class="flex justify-around mt-14 mb-24">
        <div class="bg-[#E8DDC1] w-[303px] h-[386px] rounded-[20px]">
            <h1 class="font-bold text-[32px] mt-12 mb-8 ms-[70px]">Menu Utama</h1>
            <div class="ms-[70px]">
                <p class="text-[20px] mb-5 border border-b-black border-x-transparent border-t-transparent w-[150px]">
                    Akun</p>
                <p class="text-[20px] mb-5 border border-b-black border-x-transparent border-t-transparent w-[150px]">
                    Daftar Transaksi</p>
                <p class="text-[20px] mb-5 border border-b-black border-x-transparent border-t-transparent w-[150px]">
                    Alamat</p>
                <p class="text-[20px] mb-5 border border-b-black border-x-transparent border-t-transparent w-[150px]">
                    Keluar</p>
            </div>
        </div>
        <div class="">
            <h1 class="text-[40px]">Informasi Akun</h1>
            <div class="w-[781px] h-[325px] bg-[#F5EFE9] rounded-lg">
                <div class="flex pt-7">
                    <div class="ms-16">
                        <p class="me-10 mt-6">Nama</p>
                        <p class="me-10 mt-6">Username</p>
                        <p class="me-10 mt-6">Email</p>
                        <p class="me-10 mt-6">Nomor Hp</p>
                    </div>
                    <div class="ms-10">
                        <p class="mt-6">Ardiansyah</p>
                        <p class="mt-6">ard77</p>
                        <p class="mt-6">ardiansyah@gmail.com</p>
                        <p class="mt-6">0894678576545</p>
                    </div>
                </div>
                <div class="flex justify-end me-10 mt-7">
                    <button class="bg-[#E8C597] px-8 py-1 rounded-full">Update Info</button>
                    <button class="bg-[#212121] px-8 py-1 rounded-full text-white ms-6">Tutup Akun</button>
                </div>
            </div>
        </div>
    </div>
    @include('components.footer')
</x-app-layout>

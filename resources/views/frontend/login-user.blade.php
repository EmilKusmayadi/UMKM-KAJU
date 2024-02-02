<x-app-layout>
    @include('components.responsive-nav')

    <div class="flex justify-center items-center w-full lg:h-[93vh] pt-20 lg:pt-5">
        <div class="w-full h-full px-3 lg:pl-8 flex flex-col justify-center items-center lg:items-start z-50">
            <h1 class="text-3xl w-60 lg:text-5xl font-medium text-center lg:text-left lg:w-96">
                Keajaiban dunia sayuran hidroponik
            </h1>

            <form class="flex flex-col gap-y-10">
                <div class="flex flex-col w-full lg:w-80 mt-12">
                    <label for="Email">Email</label>
                    <input type="email" id="Email" name="email"
                        class="bg-transparent outline-none border-b border-transparent border-b-black">

                    <label for="Password" class="mt-5">Password</label>
                    <input type="password" name="password" id="Password"
                        class="bg-transparent outline-none border-b border-transparent border-b-black">
                </div>

                <div class="flex flex-col gap-y-5">
                    <div class="flex gap-x-4">
                        <a href="{{ url('/account') }}">
                            <button type="button"
                                class="bg-[#E8C597] w-32 font-semibold text-sm py-1 rounded-md">Login</button>
                        </a>
                        <button type="button"
                            class="border border-[#E8C597] w-36 font-thin text-sm py-1 rounded-md">Forgot
                            Password</button>
                    </div>
                    <a href="{{ url('/register-user') }}">
                        <button type="button"
                            class="lg:hidden bg-[#345E5C] w-full rounded-lg text-white py-2 font-thin">Register</button>
                    </a>
                </div>
            </form>
        </div>

        <div class="opacity-20 lg:opacity-100 w-full h-full bg-cover bg-center p-4 flex justify-end items-start absolute lg:static top-0 left-0"
            style="background-image: url('{{ asset('image/login.png') }}');">
            <a href="/register-user"
                class="hidden lg:flex px-8 py-1 rounded-lg border border-white/45 text-white font-thin">Register</a>
        </div>
    </div>
</x-app-layout>

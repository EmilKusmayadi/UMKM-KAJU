<x-guest-layout>
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="flex justify-center items-center w-full lg:h-[93vh] pt-20 lg:pt-5">
        <div class="w-full h-full px-3 lg:pl-8 flex flex-col justify-center items-center lg:items-start z-50">
            <h1 class="text-3xl w-60 lg:text-5xl font-medium text-center lg:text-left lg:w-96">Keajaiban dunia sayuran
                hidroponik</h1>

            <form method="POST" action="{{ route('login') }}" class="flex flex-col gap-y-10">
                <div class="flex flex-col w-full lg:w-80 mt-12">
                    @csrf

                    <label for="Email">Email</label>
                    <input type="email" id="Email" name="email" :value="old('email')" required autofocus
                        autocomplete="username"
                        class="bg-transparent outline-none border-b border-transparent border-b-black">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />

                    <label for="Password" class="mt-5">Password</label>
                    <input type="password" name="password" required autocomplete="current-password" id="Password"
                        class="bg-transparent outline-none border-b border-transparent border-b-black">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="flex flex-col gap-y-5">
                    <div class="flex gap-x-4">
                        <button class="bg-[#E8C597] w-32 font-semibold text-sm py-1 rounded-md">Login</button>
                        <button class="border border-[#E8C597] w-36 font-thin text-sm py-1 rounded-md">Forgot
                            Password</button>
                    </div>

                    <button type="submit" class="lg:hidden bg-[#345E5C] w-full rounded-lg text-white py-2 font-thin">Register</button>
                </div>
            </form>
        </div>

        <div class="opacity-20 lg:opacity-100 w-full h-full bg-cover bg-center p-4 flex justify-end items-start absolute lg:static top-0 left-0"
            style="background-image: url('{{ asset('image/login.png') }}');">
            <a href="/register"
                class="hidden lg:flex px-8 py-1 rounded-lg border border-white/45 text-white font-thin">Register</a>
        </div>
    </div>
</x-guest-layout>

<x-guest-layout>
    @include('components.responsive-nav')

        <div class="flex justify-center items-center w-full lg:h-[93vh] pt-2 xl:pt-5">
            <div class="w-full h-full px-3 lg:pl-8 flex flex-col justify-center items-center lg:items-start z-50">
                <h1 class="text-2xl w-44 lg:text-4xl xl:text-5xl font-medium text-center lg:text-left lg:w-64 xl:w-96">Keajaiban dunia sayuran hidroponik</h1>

                <form method="POST" action="{{ route('register') }}" class="flex flex-col gap-y-10 lg:gap-y-6 xl:gap-y-6">
                    @csrf
                    <div class="flex flex-col w-full lg:w-80 mt-8 lg:mt-5">

                        <label for="username" class="text-sm xl:text-base">Username</label>
                        <input id="username" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" class="bg-transparent outline-none border-b border-transparent border-b-black">
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        <label for="email" class="text-sm xl:text-base mt-3">Email</label>
                        <input id="email" type="email" name="email" :value="old('email')" required autocomplete="username" class="bg-transparent outline-none border-b border-transparent border-b-black">
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        <label for="password" class="text-sm xl:text-base mt-3">Password</label>
                        <input id="password"
                        type="password"
                        name="password"
                        required autocomplete="new-password" class="bg-transparent outline-none border-b border-transparent border-b-black">
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            <label for="password_confirmation" class="text-sm xl:text-base mt-3">Confirm Password</label>
                        <input id="password_confirmation"
                        type="password"
                        name="password_confirmation" required autocomplete="new-password" class="bg-transparent outline-none border-b border-transparent border-b-black">
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <div class="flex flex-col items-center gap-y-4 w-72">
                        <button type="submit" class="bg-[#345E5C] lg:bg-[#E8C597] w-full rounded-lg text-white lg:text-black py-2 font-thin">Register</button>
                        <a href="/login" class="lg:hidden text-black text-sm border-b border-b-black w-fit">Login</a>
                    </div>
                </form>
            </div>
            <div class="opacity-20 lg:opacity-100 w-full h-full bg-cover bg-center p-4 flex justify-end items-start absolute lg:static top-0 left-0" style="background-image: url('{{ asset('image/login.png') }}');">
                <a href="/login" class="hidden lg:flex px-12 py-1 rounded-lg border border-white/45 text-white font-thin">Login</a>
            </div>
        </div>

        </x-guest-layout>


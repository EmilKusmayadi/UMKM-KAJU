    {{-- <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form> --}}

<x-guest-layout>

<div class="flex justify-center items-center w-full lg:h-[93vh] pt-8 lg:pt-5">
    <div class="w-full h-full px-3 lg:pl-8 flex flex-col justify-center items-center lg:items-start z-50">
        <h1 class="text-3xl w-60 lg:text-5xl font-medium text-center lg:text-left lg:w-96">Keajaiban dunia sayuran hidroponik</h1>

        <div class="flex flex-col gap-y-10">
            <form method="POST" action="{{ route('login') }}" class="flex flex-col w-full lg:w-80 mt-12 lg:mt-5">
                @csrf

                <label for="username">Username</label>
                <input id="username" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" class="bg-transparent outline-none border-b border-transparent border-b-black">
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                <label for="email" class="mt-5">Email</label>
                <input id="email" type="email" name="email" :value="old('email')" required autocomplete="username" class="bg-transparent outline-none border-b border-transparent border-b-black">
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                <label for="password" class="mt-5">Password</label>
                <input id="password"
                type="password"
                name="password"
                required autocomplete="new-password" class="bg-transparent outline-none border-b border-transparent border-b-black">
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </form>

            <div class="flex flex-col items-center gap-y-4 w-72">
                <button class="bg-[#345E5C] lg:bg-[#E8C597] w-full rounded-lg text-white lg:text-black py-2 font-thin">Register</button>
                <a href="/login" class="lg:hidden text-black text-sm border-b border-b-black w-fit">Login</a>
            </div>
        </div>
    </div>
    <div class="opacity-20 lg:opacity-100 w-full h-full bg-cover bg-center p-4 flex justify-end items-start absolute lg:static top-0 left-0" style="background-image: url('{{ asset('image/login.png') }}');">
        <a href="/login" class="hidden lg:flex px-12 py-1 rounded-lg border border-white/45 text-white font-thin">Login</a>
    </div>
</div>

</x-guest-layout>

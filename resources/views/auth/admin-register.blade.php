<x-guest-layout>
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="flex justify-center items-center w-full h-screen bg-[#F5F8F8]">
        <div class="opacity-20 lg:opacity-100 w-full h-full bg-cover bg-center absolute lg:static top-0 left-0"
            style="background-image: url('{{ asset('image/login-admin-image.png') }}');">
        </div>

        <div class="w-full h-full flex flex-col justify-center items-center z-50">
            <div class="w-full lg:w-[26rem] flex flex-col items-center lg:items-start">
                <div class="flex justify-center lg:justify-start lg:items-start w-full">
                    <h1 class="text-left text-2xl lg:text-4xl">
                        Register
                    </h1>
                </div>

                <form method="POST" action="{{ route('register') }}"
                    class="flex flex-col gap-y-14 mt-24 lg:mt-16 w-fit lg:w-full">
                    <div class="flex flex-col w-full">
                        @csrf

                        <label for="username" class="text-sm xl:text-base">Username</label>
                        <input id="username" type="text" name="name" :value="old('name')" required autofocus
                            autocomplete="name"
                            class="bg-transparent outline-none border-b border-transparent border-b-black">
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />

                        <label for="email" class="text-sm xl:text-base mt-3">Email</label>
                        <input id="email" type="email" name="email" :value="old('email')" required
                            autocomplete="email"
                            class="bg-transparent outline-none border-b border-transparent border-b-black">
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />

                        <label for="password" class="text-sm xl:text-base mt-3">Password</label>
                        <input id="password" type="password" name="password" required autocomplete="new-password"
                            class="bg-transparent outline-none border-b border-transparent border-b-black">
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />

                        <label for="password_confirmation" class="text-sm xl:text-base mt-3">Confirm Password</label>
                        <input id="password_confirmation" type="password" name="password_confirmation" required
                            autocomplete="new-password"
                            class="bg-transparent outline-none border-b border-transparent border-b-black">
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <div class="flex flex-col gap-y-5">
                        <div class="flex gap-x-4">
                            <a href="/login-admin"
                                class="bg-[#345E5C] w-36 font-semibold text-center text-sm py-2 rounded-md text-white">Login</a>
                            <button type="submit"
                                class="border border-[#345E5C] w-36 font-thin text-center text-sm py-2 rounded-md">
                                Register
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>

<x-app-layout>
    <x-slot name="header">
        <form action="/footer" method="POST" enctype="multipart/form-data"
            class="max-w-md mx-auto bg-white p-6 rounded-md shadow-md">
            @csrf
            <div class="mb-4">
                <label for="number" class="block text-sm font-medium text-gray-600">number</label>
                <input type="text" name="number" id="number"
                    class="mt-1 p-2 w-full border rounded-md">
                @error('number')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="short_description" class="block text-sm font-medium text-gray-600">short_description</label>
                <input type="text" name="short_description" id="short_description"
                    class="mt-1 p-2 w-full border rounded-md">
                @error('short_description')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="adress" class="block text-sm font-medium text-gray-600">adress</label>
                <input type="text" name="adress" id="adress"
                    class="mt-1 p-2 w-full border rounded-md">
                @error('adress')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-600">email</label>
                <input type="text" name="email" id="email"
                    class="mt-1 p-2 w-full border rounded-md">
                @error('email')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="facebook" class="block text-sm font-medium text-gray-600">facebook</label>
                <input type="text" name="facebook" id="facebook"
                    class="mt-1 p-2 w-full border rounded-md">
                @error('facebook')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="twitter" class="block text-sm font-medium text-gray-600">twitter</label>
                <input type="text" name="twitter" id="twitter"
                    class="mt-1 p-2 w-full border rounded-md">
                @error('twitter')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="copyright" class="block text-sm font-medium text-gray-600">copyright</label>
                <input type="text" name="copyright" id="copyright"
                    class="mt-1 p-2 w-full border rounded-md">
                @error('copyright')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <button type="submit" name="" class="bg-blue-500 text-white py-2 px-4 rounded-md">Simpan</button>
            </div>
        </form>


    </x-slot>

</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <form action="/banners" method="POST" enctype="multipart/form-data"
            class="max-w-md mx-auto bg-white p-6 rounded-md shadow-md">
            @csrf
            <div class="mb-4">
                <label for="banner_title" class="block text-sm font-medium text-gray-600">banner_title</label>
                <input type="text" name="banner_title" id="banner_title"
                    class="mt-1 p-2 w-full border rounded-md">
                @error('banner_title')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="banner_image" class="block text-sm font-medium text-gray-600">banner_image</label>
                <input type="file" name="banner_image" id="banner_image"
                    class="mt-1 p-2 w-full border rounded-md" value"">
                @error('banner_image')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="banner_url" class="block text-sm font-medium text-gray-600">banner_url</label>
                <input type="text" name="banner_url" id="banner_url"
                    class="mt-1 p-2 w-full border rounded-md" value"">
                @error('banner_url')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <button type="submit" name=""
                    class="bg-blue-500 text-white py-2 px-4 rounded-md">Simpan</button>
            </div>
        </form>


    </x-slot>

</x-app-layout>

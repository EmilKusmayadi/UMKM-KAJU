<x-app-layout>
    <x-slot name="header">
        <form action="/about" method="POST" enctype="multipart/form-data"
            class="max-w-md mx-auto bg-white p-6 rounded-md shadow-md">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-600">title</label>
                <input type="text" name="title" id="title"
                    class="mt-1 p-2 w-full border rounded-md">
                @error('title')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="short_title" class="block text-sm font-medium text-gray-600">short_title</label>
                <input type="text" name="short_title" id="short_title"
                    class="mt-1 p-2 w-full border rounded-md">
                @error('short_title')
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
                <label for="long_description" class="block text-sm font-medium text-gray-600">long_description</label>
                <input type="text" name="long_description" id="long_description"
                    class="mt-1 p-2 w-full border rounded-md">
                @error('long_description')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="about_image" class="block text-sm font-medium text-gray-600">about_image</label>
                <input type="file" name="about_image" id="about_image"
                    class="mt-1 p-2 w-full border rounded-md" value"">
                @error('about_image')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <button type="submit" name="" class="bg-blue-500 text-white py-2 px-4 rounded-md">Simpan</button>
            </div>
        </form>


    </x-slot>

</x-app-layout>

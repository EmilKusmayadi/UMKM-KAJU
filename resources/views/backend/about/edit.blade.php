<x-app-layout>
    <x-slot name="header">

    </x-slot>
    <a href="/about" class="btn btn-secondary">Kembali</a>
    <form action="{{ '/about/' . $data->id }}" method="POST" enctype="multipart/form-data"
        class="max-w-md mx-auto bg-white p-6 rounded-md shadow-md">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-gray-600">title</label>
            <input type="text" name="title" id="title" class="mt-1 p-2 w-full border rounded-md"
                value="{{ $data->title }}">
        </div>
        <div class="mb-4">
            <label for="short_title" class="block text-sm font-medium text-gray-600">short_title</label>
            <input type="text" name="short_title" id="short_title" class="mt-1 p-2 w-full border rounded-md"
                value="{{ $data->short_title }}">
        </div>
        <div class="mb-4">
            <label for="short_description" class="block text-sm font-medium text-gray-600">short_description</label>
            <input type="text" name="short_description" id="short_description"
                class="mt-1 p-2 w-full border rounded-md" value="{{ $data->short_description }}">
        </div>
        <div class="mb-4">
            <label for="long_description" class="block text-sm font-medium text-gray-600">long_description</label>
            <input type="text" name="long_description" id="long_description"
                class="mt-1 p-2 w-full border rounded-md" value="{{ $data->long_description }}">
        </div>
        @if ($data->about_image)
            <div class="mb-3">
                <img style="max-width: 50px; max-height:50px;" src="{{ url('about_image') . '/' . $data->about_image }}"
                    alt="">
            </div>
        @endif
        <div class="mb-4">
            <label for="about_image" class="block text-sm font-medium text-gray-600">about_image</label>
            <input type="file" name="about_image" id="about_image" class="mt-1 p-2 w-full border rounded-md"
                value="{{ $data->about_image }}">
        </div>
        <div class="mb-4">
            <button type="submit" name="" class="bg-blue-500 text-white py-2 px-4 rounded-md">Simpan</button>
        </div>
    </form>

</x-app-layout>

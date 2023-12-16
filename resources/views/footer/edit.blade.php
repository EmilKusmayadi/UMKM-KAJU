
<x-app-layout>
    <x-slot name="header">
        <a href="/footer" class="btn btn-secondary">Kembali</a>
        <form action="{{'/footer/'.$data->id }}" method="POST" enctype="multipart/form-data" class="max-w-md mx-auto bg-white p-6 rounded-md shadow-md">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="number" class="block text-sm font-medium text-gray-600">number</label>
                <input type="text" name="number" id="number" class="mt-1 p-2 w-full border rounded-md" value="{{ $data->number }}">
            </div>
            <div class="mb-4">
                <label for="short_description" class="block text-sm font-medium text-gray-600">short_description</label>
                <input type="text" name="short_description" id="short_description" class="mt-1 p-2 w-full border rounded-md" value="{{ $data->short_description }}">
            </div>
            <div class="mb-4">
                <label for="adress" class="block text-sm font-medium text-gray-600">adress</label>
                <input type="text" name="adress" id="adress" class="mt-1 p-2 w-full border rounded-md" value="{{ $data->adress }}">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-600">email</label>
                <input type="text" name="email" id="email" class="mt-1 p-2 w-full border rounded-md" value="{{ $data->email }}">
            </div>
            <div class="mb-4">
                <label for="facebook" class="block text-sm font-medium text-gray-600">facebook</label>
                <input type="text" name="facebook" id="facebook" class="mt-1 p-2 w-full border rounded-md" value="{{ $data->facebook }}">
            </div>
            <div class="mb-4">
                <label for="twitter" class="block text-sm font-medium text-gray-600">twitter</label>
                <input type="text" name="twitter" id="twitter" class="mt-1 p-2 w-full border rounded-md" value="{{ $data->twitter }}">
            </div>
            <div class="mb-4">
                <label for="copyright" class="block text-sm font-medium text-gray-600">copyright</label>
                <input type="text" name="copyright" id="copyright" class="mt-1 p-2 w-full border rounded-md" value="{{ $data->copyright }}">
            </div>
            <div class="mb-4">
                <button type="submit" name="" class="bg-blue-500 text-white py-2 px-4 rounded-md">Simpan</button>
            </div>
        </form>

    </x-slot>

</x-app-layout>

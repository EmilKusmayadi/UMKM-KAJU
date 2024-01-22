<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <div class="max-w-4xl mx-auto bg-white p-6 rounded-md shadow-md ">
        <a href="/about/create" class=" font-semibold bg-sky-400 p-2 rounded-lg">+Tambah Data About</a>

        <table class="min-w-full border border-gray-300 mt-10">
            <thead class="">
                <tr>
                    <th class="py-2 px-4 border-b">No</th>
                    <th class="py-2 px-4 border-b">Title</th>
                    <th class="py-2 px-4 border-b">Short Title</th>
                    <th class="py-2 px-4 border-b">Short Description</th>
                    <th class="py-2 px-4 border-b">Long Description</th>
                    <th class="py-2 px-4 border-b">About Image</th>
                    <th class="py-2 px-4 border-b">aksi</th>
                </tr>
            </thead>
            <tbody>
                @php($i = 1)
                @foreach ($data as $datas)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $i++ }}</td>
                        <td class="py-2 px-4 border-b">{{ $datas->title }}</td>
                        <td class="py-2 px-4 border-b">{{ $datas->short_title }}</td>
                        <td class="py-2 px-4 border-b">{{ $datas->short_description }}</td>
                        <td class="py-2 px-4 border-b">{{ $datas->long_description }}</td>
                        <td class="py-2 px-4 border-b">
                            @if ($datas->about_image)
                                <img style="max-width: 50px; max-height:50px"
                                    src="{{ url('about_image') . '/' . $datas->about_image }}" alt="">
                            @endif
                        </td>
                        <td class="py-2 px-4 border-b flex">
                            <a href="{{ url('/about/' . $datas->id . '/edit') }}"
                                class="text-gray-100 font-semibold bg-yellow-500 p-2 rounded-lg me-5">Edit</a>
                            <form onsubmit="return confirm('Yakin mau hapus data')" action="{{ '/about/' . $datas->id }}"
                                method="POST" class="text-gray-100 inline font-semibold bg-red-500 p-2 rounded-lg">
                                @csrf
                                @method('DELETE')
                                <button class="" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-app-layout>

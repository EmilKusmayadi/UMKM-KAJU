<x-app-layout>
    <x-slot name="header">
        <div class="max-w-4xl mx-auto bg-white p-6 rounded-md shadow-md ">
        <a href="/banners/create" class=" font-semibold bg-sky-400 p-2 rounded-lg">+Tambah Data Banner</a>

        <table class="min-w-full border border-gray-300 mt-10">
            <thead class="">
                <tr>
                    <th class="py-2 px-4 border-b">No</th>
                    <th class="py-2 px-4 border-b">banner_title</th>
                    <th class="py-2 px-4 border-b">banner_image</th>
                    <th class="py-2 px-4 border-b">banner_url</th>
                    <th class="py-2 px-4 border-b">aksi</th>
                </tr>
            </thead>
            <tbody>
                @php($i = 1)
                @foreach ($data as $datas)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $i++ }}</td>
                        <td class="py-2 px-4 border-b">{{ $datas->banner_title }}</td>
                        <td class="py-2 px-4 border-b">
                            @if ($datas->banner_image)
                                <img style="max-width: 50px; max-height:50px" src="{{ url('banner_image').'/'.$datas->banner_image }}" alt="">
                            @endif
                        </td>
                        <td class="py-2 px-4 border-b">{{ $datas->banner_url }}</td>
                        <td class="py-2 px-4 border-b flex">
                            <a href="{{ url('/banners/'.$datas->id.'/edit') }}" class="text-gray-100 font-semibold bg-yellow-500 p-2 rounded-lg me-5">Edit</a>
                            <form onsubmit="return confirm('Yakin mau hapus data')" action="{{ '/banners/'.$datas->id }}" method="POST" class="text-gray-100 inline font-semibold bg-red-500 p-2 rounded-lg">
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
    </x-slot>

</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <div class="max-w-4xl mx-auto bg-white p-6 rounded-md shadow-md ">
        <a href="/footer/create" class=" font-semibold bg-sky-400 p-2 rounded-lg">+Tambah Data Footer</a>

        <table class="min-w-full border border-gray-300 mt-10">
            <thead class="">
                <tr>
                    <th class="py-2 px-4 border-b">No</th>
                    <th class="py-2 px-4 border-b">Number</th>
                    <th class="py-2 px-4 border-b">Short Description</th>
                    <th class="py-2 px-4 border-b">Adress</th>
                    <th class="py-2 px-4 border-b">email</th>
                    <th class="py-2 px-4 border-b">facebook</th>
                    <th class="py-2 px-4 border-b">twitter</th>
                    <th class="py-2 px-4 border-b">copyright</th>
                    <th class="py-2 px-4 border-b">aksi</th>
                </tr>
            </thead>
            <tbody>
                @php($i = 1)
                @foreach ($data as $datas)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $i++ }}</td>
                        <td class="py-2 px-4 border-b">{{ $datas->number }}</td>
                        <td class="py-2 px-4 border-b">{{ $datas->short_description }}</td>
                        <td class="py-2 px-4 border-b">{{ $datas->adress }}</td>
                        <td class="py-2 px-4 border-b">{{ $datas->email }}</td>
                        <td class="py-2 px-4 border-b">{{ $datas->facebook }}</td>
                        <td class="py-2 px-4 border-b">{{ $datas->twitter }}</td>
                        <td class="py-2 px-4 border-b">{{ $datas->copyright }}</td>
                        <td class="py-2 px-4 border-b flex">
                            <a href="{{ url('/footer/'.$datas->id.'/edit') }}" class="text-gray-100 font-semibold bg-yellow-500 p-2 rounded-lg me-5">Edit</a>
                            <form onsubmit="return confirm('Yakin mau hapus data')" action="{{ '/footer/'.$datas->id }}" method="POST" class="text-gray-100 inline font-semibold bg-red-500 p-2 rounded-lg">
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

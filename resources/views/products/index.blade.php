<x-app-layout>
    <x-slot name="header">
        <div class="max-w-4xl mx-auto bg-white p-6 rounded-md shadow-md overflow-x-scroll ">
        <a href="/products/create" class="font-semibold bg-sky-400 p-2 rounded-lg">+Tambah Data Products</a>

        <table class="min-w-full border border-gray-300 mt-10 overflow-x-scroll">
            <thead class="">
                <tr>
                    <th class="py-2 px-4 border-b">No</th>
                    <th class="py-2 px-4 border-b">product_name_ind</th>
                    <th class="py-2 px-4 border-b">product_slug_ind</th>
                    <th class="py-2 px-4 border-b">product_code</th>
                    <th class="py-2 px-4 border-b">product_qty</th>
                    <th class="py-2 px-4 border-b">product_tags_ind</th>
                    <th class="py-2 px-4 border-b">product_size_ind</th>
                    <th class="py-2 px-4 border-b">product_color_ind</th>
                    <th class="py-2 px-4 border-b">selling_price</th>
                    <th class="py-2 px-4 border-b">discount_price</th>
                    <th class="py-2 px-4 border-b">short_descp_ind</th>
                    <th class="py-2 px-4 border-b">long_descp_ind</th>
                    <th class="py-2 px-4 border-b">product_thumbnail</th>
                    <th class="py-2 px-4 border-b">hot_deals</th>
                    <th class="py-2 px-4 border-b">featured</th>
                    <th class="py-2 px-4 border-b">special_offer</th>
                    <th class="py-2 px-4 border-b">special_deals</th>
                    <th class="py-2 px-4 border-b">status</th>
                    <th class="py-2 px-4 border-b">aksi</th>
                </tr>
            </thead>
            <tbody>
                @php($i = 1)
                @foreach ($data as $datas)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $i++ }}</td>
                        <td class="py-2 px-4 border-b">{{ $datas->product_name_ind }}</td>
                        <td class="py-2 px-4 border-b">{{ $datas->product_slug_ind }}</td>
                        <td class="py-2 px-4 border-b">{{ $datas->product_code }}</td>
                        <td class="py-2 px-4 border-b">{{ $datas->product_qty }}</td>
                        <td class="py-2 px-4 border-b">{{ $datas->product_tags_ind }}</td>
                        <td class="py-2 px-4 border-b">{{ $datas->product_size_ind }}</td>
                        <td class="py-2 px-4 border-b">{{ $datas->product_color_ind }}</td>
                        <td class="py-2 px-4 border-b">{{ $datas->selling_price }}</td>
                        <td class="py-2 px-4 border-b">{{ $datas->discount_price }}</td>
                        <td class="py-2 px-4 border-b">{{ $datas->short_descp_ind }}</td>
                        <td class="py-2 px-4 border-b">{{ $datas->long_descp_ind }}</td>
                        <td class="py-2 px-4 border-b">{{ $datas->product_thumbnail }}</td>
                        <td class="py-2 px-4 border-b">{{ $datas->hot_deals }}</td>
                        <td class="py-2 px-4 border-b">{{ $datas->featured }}</td>
                        <td class="py-2 px-4 border-b">{{ $datas->special_offer }}</td>
                        <td class="py-2 px-4 border-b">{{ $datas->special_deals }}</td>
                        <td class="py-2 px-4 border-b">{{ $datas->status }}</td>
                        <td class="py-2 px-4 border-b flex">
                            <a href="{{ url('/products/'.$datas->id.'/edit') }}" class="text-gray-100 font-semibold bg-yellow-500 p-4 rounded-lg me-5">Edit</a>
                            <form onsubmit="return confirm('Yakin mau hapus data')" action="{{ '/products/'.$datas->id }}" method="POST" class="text-gray-100 inline font-semibold bg-red-500 p-4 rounded-lg">
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

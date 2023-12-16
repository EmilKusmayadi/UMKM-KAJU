<x-app-layout>
    <x-slot name="header">
        <form action="/products" method="POST" enctype="multipart/form-data"
            class="max-w-md mx-auto bg-white p-6 rounded-md shadow-md">
            @csrf
            <div class="mb-4">
                <label for="product_name_ind" class="block text-sm font-medium text-gray-600">product_name_ind</label>
                <input type="text" name="product_name_ind" id="product_name_ind"
                    class="mt-1 p-2 w-full border rounded-md" value"">
                @error('product_name_ind')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="product_slug_ind" class="block text-sm font-medium text-gray-600">product_slug_ind</label>
                <input type="text" name="product_slug_ind" id="product_slug_ind"
                    class="mt-1 p-2 w-full border rounded-md" value"">
                @error('product_slug_ind')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="product_code" class="block text-sm font-medium text-gray-600">product_code</label>
                <input type="text" name="product_code" id="product_code" class="mt-1 p-2 w-full border rounded-md"
                    value"">
                @error('product_code')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="product_qty" class="block text-sm font-medium text-gray-600">product_qty</label>
                <input type="text" name="product_qty" id="product_qty" class="mt-1 p-2 w-full border rounded-md"
                    value"">
                @error('product_qty')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="product_tags_ind" class="block text-sm font-medium text-gray-600">product_tags_ind</label>
                <input type="text" name="product_tags_ind" id="product_tags_ind"
                    class="mt-1 p-2 w-full border rounded-md" value"">
                @error('product_tags_ind')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="product_size_ind" class="block text-sm font-medium text-gray-600">product_size_ind</label>
                <input type="text" name="product_size_ind" id="product_size_ind"
                    class="mt-1 p-2 w-full border rounded-md" value"">
                @error('product_size_ind')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="product_color_ind" class="block text-sm font-medium text-gray-600">product_color_ind</label>
                <input type="text" name="product_color_ind" id="product_color_ind"
                    class="mt-1 p-2 w-full border rounded-md" value"">
                @error('product_color_ind')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="selling_price" class="block text-sm font-medium text-gray-600">selling_price</label>
                <input type="text" name="selling_price" id="selling_price"
                    class="mt-1 p-2 w-full border rounded-md" value"">
                @error('selling_price')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="discount_price" class="block text-sm font-medium text-gray-600">discount_price</label>
                <input type="text" name="discount_price" id="discount_price"
                    class="mt-1 p-2 w-full border rounded-md" value"">
                @error('discount_price')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="short_descp_ind" class="block text-sm font-medium text-gray-600">short_descp_ind</label>
                <input type="text" name="short_descp_ind" id="short_descp_ind"
                    class="mt-1 p-2 w-full border rounded-md" value"">
                @error('short_descp_ind')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="long_descp_ind" class="block text-sm font-medium text-gray-600">long_descp_ind</label>
                <input type="text" name="long_descp_ind" id="long_descp_ind"
                    class="mt-1 p-2 w-full border rounded-md" value"">
                @error('long_descp_ind')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="product_thumbnail"
                    class="block text-sm font-medium text-gray-600">product_thumbnail</label>
                <input type="text" name="product_thumbnail" id="product_thumbnail"
                    class="mt-1 p-2 w-full border rounded-md" value"">
                @error('product_thumbnail')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="hot_deals" class="block text-sm font-medium text-gray-600">hot_deals</label>
                <input type="text" name="hot_deals" id="hot_deals" class="mt-1 p-2 w-full border rounded-md"
                    value"">
                @error('hot_deals')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="featured" class="block text-sm font-medium text-gray-600">featured</label>
                <input type="text" name="featured" id="featured" class="mt-1 p-2 w-full border rounded-md"
                    value"">
                @error('featured')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="special_offer" class="block text-sm font-medium text-gray-600">special_offer</label>
                <input type="text" name="special_offer" id="special_offer"
                    class="mt-1 p-2 w-full border rounded-md" value"">
                @error('special_offer')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="special_deals" class="block text-sm font-medium text-gray-600">special_deals</label>
                <input type="text" name="special_deals" id="special_deals"
                    class="mt-1 p-2 w-full border rounded-md" value"">
                @error('special_deals')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="status" class="block text-sm font-medium text-gray-600">status</label>
                <input type="text" name="status" id="status" class="mt-1 p-2 w-full border rounded-md"
                    value"">
                @error('status')
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

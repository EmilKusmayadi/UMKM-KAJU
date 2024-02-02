<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = products::orderBy('id', 'asc')->get();
        return view('backend.products.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_name_ind' => 'required',
            'product_slug_ind' => 'required',
            'product_code' => 'required',
            'product_qty' => 'required',
            'product_tags_ind' => 'required',
            'product_size_ind' => 'required',
            'product_color_ind' => 'required',
            'selling_price' => 'required',
            'discount_price' => 'required',
            'short_descp_ind' => 'required',
            'long_descp_ind' => 'required',
            'product_thumbnail' => 'required|mimes:png,jpg,jpeg',
            'hot_deals' => 'required|integer',
            'featured' => 'required|integer',
            'special_offer' => 'required|integer',
            'special_deals' => 'required|integer',
            'status' => 'required|integer',
        ], [
            'product_name_ind.required' => 'wajib di isi',
            'product_slug_ind.required' => 'wajib di isi',
            'product_code.required' => 'wajib di isi',
            'product_qty.required' => 'wajib di isi',
            'product_tags_ind.required' => 'wajib di isi',
            'product_size_ind.required' => 'wajib di isi',
            'product_color_ind.required' => 'wajib di isi',
            'selling_price.required' => 'wajib di isi',
            'discount_price.required' => 'wajib di isi',
            'short_descp_ind.required' => 'wajib di isi',
            'long_descp_ind.required' => 'wajib di isi',
            'product_thumbnail.required' => 'wajib di isi',
            'product_thumbnail.mimes' => 'gambar hanya di perbolehkan type filenya png,jpg,jpeg',
            'hot_deals.required' => 'wajib di isi',
            'featured.required' => 'wajib di isi',
            'special_offer.required' => 'wajib di isi',
            'special_deals.required' => 'wajib di isi',
            'status.required' => 'wajib di isi',
        ]);

        $foto_file = $request->file('product_thumbnail');
        $foto_extensi = $foto_file->extension();
        $foto_nama = date('ymdhis') . '.' . $foto_extensi;
        $foto_file->move(public_path('product_thumbnail'), $foto_nama);

        $data = $request->except('product_thumbnail');
        $data['product_thumbnail'] = $foto_nama;

        products::create($data);

        return redirect('products')->with('success', 'Berhasil memasukkan data');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = products::where('id', $id)->first();
        return view('backend.products.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'product_name_ind' => 'required',
            'product_slug_ind' => 'required',
            'product_code' => 'required',
            'product_qty' => 'required',
            'product_tags_ind' => 'required',
            'product_size_ind' => 'required',
            'product_color_ind' => 'required',
            'selling_price' => 'required',
            'discount_price' => 'required',
            'short_descp_ind' => 'required',
            'long_descp_ind' => 'required',
            'hot_deals' => 'required|integer',
            'featured' => 'required|integer',
            'special_offer' => 'required|integer',
            'special_deals' => 'required|integer',
            'status' => 'required|integer',
        ], [
            'product_name_ind.required' => 'wajib di isi',
            'product_slug_ind.required' => 'wajib di isi',
            'product_code.required' => 'wajib di isi',
            'product_qty.required' => 'wajib di isi',
            'product_tags_ind.required' => 'wajib di isi',
            'product_size_ind.required' => 'wajib di isi',
            'product_color_ind.required' => 'wajib di isi',
            'selling_price.required' => 'wajib di isi',
            'discount_price.required' => 'wajib di isi',
            'short_descp_ind.required' => 'wajib di isi',
            'long_descp_ind.required' => 'wajib di isi',
            'hot_deals.required' => 'wajib di isi',
            'featured.required' => 'wajib di isi',
            'special_offer.required' => 'wajib di isi',
            'special_deals.required' => 'wajib di isi',
            'status.required' => 'wajib di isi',
        ]);

        $data = [
            'product_name_ind' => $request->input('product_name_ind'),
            'product_slug_ind' => $request->input('product_slug_ind'),
            'product_code' => $request->input('product_code'),
            'product_qty' => $request->input('product_qty'),
            'product_tags_ind' => $request->input('product_tags_ind'),
            'product_size_ind' => $request->input('product_size_ind'),
            'product_color_ind' => $request->input('product_color_ind'),
            'selling_price' => $request->input('selling_price'),
            'discount_price' => $request->input('discount_price'),
            'short_descp_ind' => $request->input('short_descp_ind'),
            'long_descp_ind' => $request->input('long_descp_ind'),
            'hot_deals' => $request->input('hot_deals'),
            'featured' => $request->input('featured'),
            'special_offer' => $request->input('special_offer'),
            'special_deals' => $request->input('special_deals'),
            'status' => $request->input('status'),
        ];
        if ($request->hasFile('product_thumbnail')) {
            $request->validate([
                'product_thumbnail' => 'mimes:png,jpg,jpeg'
            ], [
                'product_thumbnail.mimes' => 'Foto hanya di perbolehkan type filenya png.jgp.jpeg'
            ]);
            $foto_file = $request->file('product_thumbnail');
            $foto_extensi = $foto_file->extension();
            $foto_nama = date('ymdhis') . '.' . $foto_extensi;
            $foto_file->move(public_path('product_thumbnail'), $foto_nama);

            $data_foto = products::where('id', $id)->first();
            File::delete(public_path('product_thumbnail') . '/' . $data_foto->product_thumbnail);

            $data['product_thumbnail'] = $foto_nama;
        }
        products::where('id', $id)->update($data);
        return redirect('/products')->with('success', 'Berhasil Update data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = products::where('id', $id)->first();
        products::where('id', $id)->delete();
        return redirect('products')->with('data', $data);
    }
}

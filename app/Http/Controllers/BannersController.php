<?php

namespace App\Http\Controllers;

use App\Models\banner;
use App\Models\Banners;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class BannersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Banners::all();
        // dd($data);
        return view('backend.banner.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('banner_input', $request->banner_input);
        Session::flash('banner_url', $request->banner_url);
        $request->validate([
            'banner_title' => 'required',
            'banner_image' => 'required|mimes:png,jpg,jpeg',
            'banner_url' => 'required',
        ], [
            'banner_url.required' => 'wajib di isi',
            'banner_image.required' => 'wajib di isi',
            'banner_image.mimes' => 'gambar hanya di perbolehkan type filenya png.jgp.jpeg',
            'banner_url.required' => 'wajib di isi',
        ]);
        $foto_file = $request->file('banner_image');
        $foto_extensi = $foto_file->extension();
        $foto_nama = date('ymdhis') . '.' . $foto_extensi;
        $foto_file->move(public_path('banner_image'), $foto_nama);
        $data = [
            'banner_title' => $request->input('banner_title'),
            'banner_image' =>  $foto_nama,
            'banner_url' => $request->input('banner_url'),
        ];
        Banners::create($data);
        return redirect('banners')->with('success', 'Berhasil Memasukkan Data');
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
        $data = Banners::where('id', $id)->first();
        return view('backend.banner.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'banner_title' => 'required',
            'banner_url' => 'required',
        ], [
            'banner_url.required' => 'wajib di isi',
            'banner_url.required' => 'wajib di isi'
        ]);
        $data = [
            'banner_title' => $request->input('banner_title'),
            'banner_url' => $request->input('banner_url'),
        ];
        if ($request->hasFile('banner_image')) {
            $request->validate([
                'banner_image' => 'mimes:png,jpg,jpeg'
            ], [
                'banner_image.mimes' => 'Foto hanya di perbolehkan type filenya png.jgp.jpeg'
            ]);
            $foto_file = $request->file('banner_image');
            $foto_extensi = $foto_file->extension();
            $foto_nama = date('ymdhis') . '.' . $foto_extensi;
            $foto_file->move(public_path('banner_image'), $foto_nama);

            $data_foto = Banners::where('id', $id)->first();
            File::delete(public_path('banner_image') . '/' . $data_foto->banner_image);

            $data['banner_image'] = $foto_nama;
        }
        Banners::where('id', $id)->update($data);
        return redirect('/banners')->with('success', 'Berhasil Update Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Banners::where('id', $id)->first();
        File::delete(public_path('banner_image') . '/' . $data->banner_image);
        Banners::where('id', $id)->delete();
        return redirect('banners')->with('data', $data);
    }
}

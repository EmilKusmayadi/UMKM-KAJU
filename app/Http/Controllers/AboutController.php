<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = About::orderBy('id', 'desc')->get();
        // dd($data);
        return view('backend.about.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('title', $request->title);
        Session::flash('short_title', $request->short_title);
        Session::flash('short_description', $request->short_description);
        Session::flash('long_description', $request->long_description);
        $request->validate([
            'title' => 'required',
            'short_title' => 'required',
            'short_description' => 'required',
            'long_description' => 'required',
            'about_image' => 'required|mimes:png,jpg,jpeg',
        ], [
            'title.required' => 'wajib di isi',
            'short_title.required' => 'wajib di isi',
            'short_description.required' => 'wajib di isi',
            'long_description.required' => 'wajib di isi',
            'about_image.required' => 'wajib di isi',
            'about_image.mimes' => 'gambar hanya di perbolehkan type filenya png.jgp.jpeg',
        ]);
        $foto_file = $request->file('about_image');
        $foto_extensi = $foto_file->extension();
        $foto_nama = date('ymdhis') . '.' . $foto_extensi;
        $foto_file->move(public_path('about_image'), $foto_nama);
        $data = [
            'title' => $request->input('title'),
            'short_title' => $request->input('short_title'),
            'short_description' => $request->input('short_description'),
            'long_description' => $request->input('long_description'),
            'about_image' =>  $foto_nama,
        ];
        About::create($data);
        return redirect('abouts')->with('success', 'Berhasil Memasukkan Data');
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
        $data = About::where('id', $id)->first();
        return view('backend.about.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'short_title' => 'required',
            'short_description' => 'required',
            'long_description' => 'required',
            'about_image' => 'required|mimes:png,jpg,jpeg',
        ], [
            'title.required' => 'wajib di isi',
            'short_title.required' => 'wajib di isi',
            'short_description.required' => 'wajib di isi',
            'long_description.required' => 'wajib di isi',
            'about_image.required' => 'wajib di isi',
            'about_image.mimes' => 'gambar hanya di perbolehkan type filenya png.jgp.jpeg',
        ]);
        $data = [
            'title' => $request->input('title'),
            'short_title' => $request->input('short_title'),
            'short_description' => $request->input('short_description'),
            'long_description' => $request->input('long_description'),
        ];
        if ($request->hasFile('about_image')) {
            $request->validate([
                'about_image' => 'mimes:png,jpg,jpeg'
            ], [
                'about_image.mimes' => 'Foto hanya di perbolehkan type filenya png.jgp.jpeg'
            ]);
            $foto_file = $request->file('about_image');
            $foto_extensi = $foto_file->extension();
            $foto_nama = date('ymdhis') . '.' . $foto_extensi;
            $foto_file->move(public_path('about_image'), $foto_nama);

            $data_foto = About::where('id', $id)->first();
            File::delete(public_path('about_image') . '/' . $data_foto->about_image);

            $data['about_image'] = $foto_nama;
        }
        About::where('id', $id)->update($data);
        return redirect('/abouts')->with('success', 'Berhasil Update Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = About::where('id', $id)->first();
        File::delete(public_path('about_image') . '/' . $data->about_image);
        About::where('id', $id)->delete();
        return redirect('abouts')->with('data', $data);
    }
}

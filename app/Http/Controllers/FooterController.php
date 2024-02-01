<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $footer = Footer::all();
        // dd($footer);
        return view('backend.footer.index')->with('footer', $footer);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.footer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('number', $request->number);
        Session::flash('short_description', $request->short_description);
        Session::flash('adress', $request->adress);
        Session::flash('email', $request->email);
        Session::flash('facebook', $request->facebook);
        Session::flash('twitter', $request->twitter);
        Session::flash('copyright', $request->copyright);
        $request->validate([
            'number' => 'required',
            'short_description' => 'required',
            'adress' => 'required',
            'email' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'copyright' => 'required',
        ], [
            'number.required' => 'wajib di isi',
            'short_description.required' => 'wajib di isi',
            'adress.required' => 'wajib di isi',
            'email.required' => 'wajib di isi',
            'facebook.required' => 'wajib di isi',
            'twitter.required' => 'wajib di isi',
            'copyright.required' => 'wajib di isi',
        ]);
        $data = [
            'number' => $request->input('number'),
            'short_description' => $request->input('short_description'),
            'adress' => $request->input('adress'),
            'email' => $request->input('email'),
            'facebook' => $request->input('facebook'),
            'twitter' => $request->input('twitter'),
            'copyright' => $request->input('copyright'),
        ];
        Footer::create($data);
        return redirect('footers')->with('success', 'Berhasil Memasukkan Data');
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
        $data = Footer::where('id', $id)->first();
        return view('backend.footer.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'number' => 'required',
            'short_description' => 'required',
            'adress' => 'required',
            'email' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'copyright' => 'required',
        ], [
            'number.required' => 'wajib di isi',
            'short_description.required' => 'wajib di isi',
            'adress.required' => 'wajib di isi',
            'email.required' => 'wajib di isi',
            'facebook.required' => 'wajib di isi',
            'twitter.required' => 'wajib di isi',
            'copyright.required' => 'wajib di isi',
        ]);
        $data = [
            'number' => $request->input('number'),
            'short_description' => $request->input('short_description'),
            'adress' => $request->input('adress'),
            'email' => $request->input('email'),
            'facebook' => $request->input('facebook'),
            'twitter' => $request->input('twitter'),
            'copyright' => $request->input('copyright'),
        ];
        Footer::where('id', $id)->update($data);
        return redirect('/footers')->with('success', 'Berhasil Update Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Footer::where('id', $id)->first();
        Footer::where('id', $id)->delete();
        return redirect('footers')->with('data', $data);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use Illuminate\Http\Request;

class FakultasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
<<<<<<< HEAD
        $fakultas = Fakultas::all(); // select * from fakultas
        return view('Fakultas.index')
                ->with('fakultas', $fakultas);
=======
        $fakultas = ["FIKR", "FEB"];
        return view('fakultas.index')
        ->with('fakultas', $fakultas);
>>>>>>> a8fdf79a2d4d9e597d92ce1c5581ba33b83e17c6
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
<<<<<<< HEAD
        return view('fakultas.create');
=======
        return view
        //
>>>>>>> a8fdf79a2d4d9e597d92ce1c5581ba33b83e17c6
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
       // dd($request);
       // validasi form
       $val = $request->validate([
        'nama'=> "required|unique:fakultas",
        'singkatan'=> "required|max:4"
       ]);

       Fakultas::create($val);

       return redirect()->route('fakultas.index')->with('success',$val['nama'].' berhasil disimpan');
=======
        //
>>>>>>> a8fdf79a2d4d9e597d92ce1c5581ba33b83e17c6
    }

    /**
     * Display the specified resource.
     */
    public function show(Fakultas $fakultas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fakultas $fakultas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fakultas $fakultas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fakultas $fakultas)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Pets;
use Illuminate\Http\Request;

class PetsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Pets::all();
        return view('pets.index', compact(
            'datas'
        ));
    }
 
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $model = new Pets;
        return view('pets.create', compact(
            'model'
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $model = new Pets;
        $model->hewan = $request->hewan;
        $model->jenis = $request->jenis;
        $model->jumlah = $request->jumlah;
        
        return redirect('pegawai');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pets $pets)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $model = Pets::find($id);
        return view('pets.edit', compact(
            'model'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $model = Pets::find($id);
        $model->hewan = $request->hewan;
        $model->jenis = $request->jenis;
        $model->jumlah = $request->jumlah;
        $model->save();

        return redirect('pegawai');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $model = Pets::find($id);
        $model->delete();
        return redirect('pets');
    }
}

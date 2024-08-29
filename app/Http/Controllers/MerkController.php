<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Merk;

class MerkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $merk = Merk::all();
        return view('merk.index', compact('merk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('merk.input_merk');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'merk' => 'required|string|max:50',
        ]);

        Merk::create([
                'merk_barang' => $request->merk,
            ]);
           
        return redirect()->route('merk.index')->with('success', 'Merk barang berhasil ditambahkan');       
       }

    /**
     * Display the specified resource.
     */
    public function show(Merk  $merk)
    {
        return View('merk.show',\compact('merk'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

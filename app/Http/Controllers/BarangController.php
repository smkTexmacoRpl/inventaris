<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use App\Models\JenisBarang;
use App\Models\Lokasi;
use App\Models\Merk;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $barangs = ['laptop','pc','AC']; 
      return View('barang.index',\compact('barangs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
      
      $merk = Merk::all();
      $jenis = JenisBarang::all();
      $lokasi = Lokasi::all();
      
      return view('barang.input', \compact('merk','jenis','lokasi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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

<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $request = Pesanan::latest()->get();
        return view('pages.pemesanan', compact('requests'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_pemesan' => 'required',
            'no_telp' => 'required',
            'no_hp' => 'required',
            'waktu' => 'required',
            'pelayanan_paket' => 'required',
            'jumlah_peserta' => 'required',
            'pilihan_paket' => 'required'
        ]);
            Pesanan::create($request->all());
            return redirect()->route('PesananController.index')->with('success', 'Data Berhasil Ditambahkan.');
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

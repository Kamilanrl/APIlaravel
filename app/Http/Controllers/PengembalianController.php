<?php

namespace App\Http\Controllers;

use App\Models\Pengembalian;
use Illuminate\Http\Request;

class PengembalianController extends Controller
{
    public function index()
    {
        $pengembalianData = Pengembalian::all();
        return response()->json([
           "message" => "Berhasil Mendapatkan Pengembalian",
           "data" => $pengembalianData
        ],200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $data = Pengembalian::create([
          "tanggal_pengembalian" => $request->tanggal_pengembalian,
          "denda" => $request->denda,
          "buku_id" => $request->buku_id,
          "anggota_id" => $request->anggota_id,
          "petugas_id" => $request->petugas_id,
        ]);

        if(!$data) return response()->json([
            "message" => "Gagal Membuat Pengembalian",
        ],400);


        return response()->json([
           "message" => "Berhasil Membuat Pengembalian",
           "data" => $data
        ],200);

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
        $data = Pengembalian::find($id);

        if(!$data) return response()->json([
            "message" => "Tidak Menemukan Pengembalian",
        ],400);

        return response()->json([
           "message" => "Berhasil Menemukan Pengembalian",
           "data" => $data
        ],200);
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
        $data = Pengembalian::find($id);
        $updatedData = $data->update([
          "tanggal_pengembalian" => $request->tanggal_pengembalian,
          "denda" => $request->denda,
          "buku_id" => $request->buku_id,
          "anggota_id" => $request->anggota_id,
          "petugas_id" => $request->petugas_id,
        ]);

        if(!$updatedData) return response()->json([
             "message" => "Gagal Mengupdate Data"
        ],400);

        return response()->json([
            "message" => "Berhasil Mengupdate Data",
            "data" => $updatedData
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $dataToDelete = Pengembalian::findOrFail($id);
         $dataToProced = $dataToDelete->delete();

         if(!$dataToProced) return response()->json([
           "message" => "Gagal Menghapus Data!"
         ],400);

         return response()->json([
            "message" => "Berhasil Menghapus Data!"
         ],200);
    }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\SeniBudaya;

class SeniBudayaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $senibudayas = SeniBudaya::all();
        return view('senibudaya.index', compact('senibudayas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $create = SeniBudaya::all();
        return view('senibudaya.create', compact('create'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:3',
            'pembimbing' => 'required|max:30',
            'jadwal' => 'required|max:20',
        ], [
            'nama.required' => 'Nama obat harus diisi !',
            'pembimbing.required' => 'Nama Pembimbing harus diisi !',
            'jadwal.required' => 'Jadwal harus diisi !',
            'nama.min' => 'Nama Seni Budaya minimal 3 karakter',
            'pembimbing.max' => 'Nama Pembimbing maksimal 30 karakter',
            'jadwal.max' => 'Jadwal maksimal 20 karakter',
        ]);


        SeniBudaya::create([
            'nama' => $request->nama,
            'pembimbing' => $request->pembimbing,
            'jadwal' => $request->jadwal,
        ]);
        return redirect()->route('senbud.data')->with('success', 'data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = SeniBudaya::find($id);
        return view('senibudaya.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'pembimbing' => 'required',
            'jadwal' => 'required',
        ]);

        SeniBudaya::where('id', $id)->update([
            'nama' => $request->nama,
            'pembimbing' => $request->pembimbing,
            'jadwal' => $request->jadwal,
        ]);
        return redirect()->route('senbud.data')->with('success', 'Berhasil mengupdate data obat!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $deleteData = SeniBudaya::where('id', $id)->delete();

        if ($deleteData) {
            return redirect()->back()->with('success', 'Berhasil menghapus data obat!');
        } else {
            return redirect()->back()->with('failed', 'Gagal menghapus data obat!');
        }
    }
}

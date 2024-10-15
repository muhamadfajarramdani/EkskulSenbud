<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakurikuler;

use Illuminate\Http\Request;// Pastikan untuk mengimpor model ini

class EkstrakurikulerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ekstrakurikulers = Ekstrakurikuler::all();
        return view('ekstrakurikuler.index', compact('ekstrakurikulers'));
    }

    public function create()
    {
        return view('ekstrakurikuler.create');
    }

    public function store(Request $request)
    {
        Ekstrakurikuler::create($request->all());
        return redirect()->route('ekstrakurikuler.index');
    }

    public function edit($id)
    {
        $ekstrakurikuler = Ekstrakurikuler::findOrFail($id);
        return view('ekstrakurikuler.edit', compact('ekstrakurikuler'));
    }

    public function update(Request $request, $id)
    {
        $ekstrakurikuler = Ekstrakurikuler::findOrFail($id);
        $ekstrakurikuler->update($request->all());

        return redirect()->route('ekstrakurikuler.index')->with('success', 'Data berhasil diupdate');
    }


    public function destroy(Ekstrakurikuler $ekstrakurikuler)
    {
        $ekstrakurikuler->delete();
        return redirect()->route('ekstrakurikuler.index');
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Pengarang;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class PengarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pengarang = Pengarang::all();
        return view('pengarang.index', compact('pengarang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pengarang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'nama_pengarang' => 'required',
            'email' => 'required|unique:pengarangs,email',
            'tlp' => 'required|unique:pengarangs,tlp'
        ]);
        $pengarang = new Pengarang();
        $pengarang->nama_pengarang = $request->nama_pengarang;
        $pengarang->email = $request->email;
        $pengarang->tlp = $request->tlp;
        $pengarang->save();
        return redirect()->route('pengarang.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $pengarang = Pengarang::findOrFail($id);
        return view('pengarang.show', compact('pengarang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
         $pengarang = Pengarang::findOrFail($id);
        return view('pengarang.edit', compact('pengarang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validated = $request->validate([
            'nama_pengarang' => 'required',
            'email' => 'required|unique:pengarangs,email,' .$id,
            'tlp' => 'required|unique:pengarangs,tlp,'  .$id
        ]);

        $pengarang = Pengarang::findOrFail($id);
        $pengarang->nama_pengarang = $request->nama_pengarang;
        $pengarang->email = $request->email;
        $pengarang->tlp = $request->tlp;
        $pengarang->save();
        return redirect()->route('pengarang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $pengarang = Pengarang::findOrFail($id)->delete();
        return redirect()->route('pengarang.index');
    }
}

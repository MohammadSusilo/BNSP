<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\bnsp;

class bnspController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            // dd($request);

            $bnsp = new bnsp();
            $bnsp->nama = $request->nama;
            $bnsp->email = $request->email;
            $bnsp->hp = $request->hp;
            $bnsp->semester = $request->semester;
            $bnsp->ipk = $request->ipk;
            $bnsp->beasiswa = $request->beasiswa;
            $bnsp->berkas = $request->berkas;
            $bnsp->save();

            return redirect()->route('hasil')->with('success', 'Create Stations is Success');

        }catch (Exception $exc) {
            abort(404, $exc->getMessage());
        }
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

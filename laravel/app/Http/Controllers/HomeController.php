<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }

    public function store(Request $request)
    {
        try{
            dd($request);
            $this->validate($request,[
                'name' => 'required',
                'desc' => 'required|max:255'
            ]);

            $stations = new stations();
            $stations->name = $request->name;
            $stations->desc = $request->desc;
            $stations->ICAO = $request->ICAO;
            $stations->WMO = $request->WMO;
            $stations->IATA = $request->IATA;
            $stations->elevation = $request->elevation;
            $stations->loc = $request->loc;
            $stations->lat = $request->lat;
            $stations->lon = $request->lon;
            $stations->save();

            return redirect()->route('stations.show', $stations->id)->with('success', 'Create Stations is Success');

        }catch (Exception $exc) {
            abort(404, $exc->getMessage());
        }
    }
}

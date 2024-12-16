<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;
// use Illuminate\Support\Facades\DB;

class FlightController extends Controller
{
    public function index()
    {
        $flight = Flight::all();
        return view('index', ['Flights' => $flight]);
    }
    public function create()
    {
        return view('create');
    }
    //
    public function store(Request $request)
    {
        // dd($request->name);  display onluy name
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:2',
            'decription' => 'nullable'


        ]);

        $newProduct = Flight::create($data);
        return redirect(route('index'));
    }
    //

}

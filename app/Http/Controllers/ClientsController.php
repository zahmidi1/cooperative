<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreclientsRequest;
use App\Http\Requests\UpdateclientsRequest;
use App\Models\clients;
use App\Models\milk_reception;
use Illuminate\Support\Facades\DB;

use function Psy\bin;

class ClientsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('client')->with([
            "clients" =>  clients::all(),

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client')->with([
            "clients" =>  clients::all(),

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreclientsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreclientsRequest $request)
    {

        $request->validate([

            'name' => 'required|min:5|max:25',
            'cin' => 'required|min:3|max:9',
            'adress' => 'required|max:250',
            'telefone' => 'required|max:10'
        ]);




        $client = new clients();

        $client->name = $request->input('name');
        $client->cin = $request->input('cin');
        $client->adress = $request->input('adress');
        $client->telefone = $request->input('telefone');
        $client->save();
        return redirect('/client')->with('status', 'insertion réussie');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function show(clients $id)
    {

        $reception =  milk_reception::where('id_client', $id->id)->get();
        return view('milk_reception')->with([
            "milk_reception" =>  $reception,
            "clients" =>  clients::all(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function edit(clients $id)
    {
        $client =  clients::find($id);
        return view('client')->with([
            "clients" =>  $client

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateclientsRequest  $request
     * @param  \App\Models\clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateclientsRequest $request, clients $id)
    {
        $client =  clients::find($id);

        $client->name = $request->input('name');
        $client->cin = $request->input('cin');
        $client->adress = $request->input('adress');
        $client->telefone = $request->input('telefone');
        $client->save();
        return redirect('/client');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function destroy(clients $id)
    {
        $client =  clients::find($id);
        $client->delete();
        return redirect('/client');
    }
}
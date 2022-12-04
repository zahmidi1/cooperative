<?php

namespace App\Http\Controllers;

use App\Http\Requests\Storemilk_receptionRequest;
use App\Http\Requests\Updatemilk_receptionRequest;
use App\Models\clients;
use App\Models\milk_reception;
use Illuminate\Support\Facades\DB;

class MilkReceptionController extends Controller
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
        return view('milk_reception')->with([
            "clients" =>  clients::all(),
            "milk_reception" => milk_reception::where('date_payment', null)
                ->orderBy('created_at', 'DESC')
                ->limit(30)
                ->get()



        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('milk_reception')->with([

            "milk_reception" => milk_reception::all()


        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storemilk_receptionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storemilk_receptionRequest $request)
    {
        $request->validate([
            'id_client' => 'required',
            'period' => 'required',
            'quantity' => 'required|min:1|max:3',
            'density' => 'required|max:50|min:1',
            'heat' => 'required|max:40'




        ]);


        $milk_reception = new milk_reception();
        $milk_reception->id_user = $request->input('id_user');
        $milk_reception->id_client = $request->input('id_client');
        $milk_reception->period = $request->input('period');
        $milk_reception->quantity = $request->input('quantity');
        $milk_reception->density = $request->input('density');
        $milk_reception->heat = $request->input('heat');
        $milk_reception->date_payment =  NULL;
        $milk_reception->save();
        return redirect('/client')->with('status', 'insertion réussie');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\milk_reception  $milk_reception
     * @return \Illuminate\Http\Response
     */
    public function show(milk_reception $id)
    {
        // return DB::table('milk_receptions')->where('id_client', $id);
        // DB::Table('milk_receptions')->where('id', $id)->get();

        // DB::Table('milk_receptions')->get();
        // return milk_reception::where('id_clinet', "=", $id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\milk_reception  $milk_reception
     * @return \Illuminate\Http\Response
     */
    public function edit(milk_reception $milk_reception)
    {
        // return view('milk_reception')->with([

        //     "milk_reception" => milk_reception::all()

        // ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatemilk_receptionRequest  $request
     * @param  \App\Models\milk_reception  $milk_reception
     * @return \Illuminate\Http\Response
     */
    public function update(Updatemilk_receptionRequest $request, milk_reception $milk_reception)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\milk_reception  $milk_reception
     * @return \Illuminate\Http\Response
     */
    public function destroy(milk_reception $milk_reception)
    {
        //
    }
}

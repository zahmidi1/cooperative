<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreinvoiceRequest;
use App\Http\Requests\UpdateinvoiceRequest;
use App\Models\clients;
use App\Models\invoice;
use App\Models\milk_reception;

class InvoiceController extends Controller
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
    public function index($id, $date_py)
    {


        //Invoice.blade
        return view('Invoice')->with([

            "milk_reception" => milk_reception::where('date_payment', null)
                ->where('id_client', $id)
                ->orderBy('created_at', 'asc')
                ->whereRaw("created_at <= DATE_ADD('$date_py' , INTERVAL 16 DAY)")
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreinvoiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreinvoiceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function show(invoice $invoice)
    {
        $invoice->validate([

            'name' => 'required|min:5|max:25',
            'cin' => 'required|min:3|max:9',
            'adress' => 'required|max:250',
            'telefone' => 'required|max:10'
        ]);




        $client = new clients();

        $client->name = $invoice->input('name');
        $client->cin = $invoice->input('cin');
        $client->adress = $invoice->input('adress');
        $client->telefone = $invoice->input('telefone');
        $client->save();
        return redirect('/client')->with('status', 'insertion réussie');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function edit(invoice $invoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateinvoiceRequest  $request
     * @param  \App\Models\invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateinvoiceRequest $request, invoice $invoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(invoice $invoice)
    {
        //
    }
}
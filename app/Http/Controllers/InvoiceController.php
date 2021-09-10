<?php

namespace App\Http\Controllers;

use App\Stock;
use App\Invoice;
use App\Category;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoices = Invoice::all();
        return view('invoice.read', compact('invoices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $stock = Stock::with('category')->find($id);
        // dd($stock);
        return view('invoice.create', compact('stock'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $request->validate([
            'address' => 'required | max:255',
            'postcode' => 'required',
            'quantity' => 'required'
        ]);

        // dd($request->all());

        $stock = Stock::with('category')->find($id);
        // dd($stock);

        $stock->quantity = $stock->quantity - $request->quantity;
        $stock->save();

        $invoice = new Invoice();
        $invoice->item = $stock->item;
        $invoice->price = $stock->price;
        $invoice->quantity = $request->quantity;
        $invoice->category = $stock->category['name'];
        $invoice->price = $stock->price;
        $invoice->image = $stock->image;
        $invoice->address = $request->address;
        $invoice->postcode = $request->postcode;
        $invoice->total = $invoice->price * $invoice->quantity;

        $invoice->save();

        return view('invoice.detail', compact('stock', 'invoice'))->with('success', 'Struk anda telah diprint');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $invoice = Invoice::find($id);
        return view('invoice.detail', compact('invoice'));
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
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Stock;
use App\Category;
use Illuminate\Support\Facades\Redirect;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('stock.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'item' => 'required | max:255',
            'price' => 'required',
            'quantity' => 'required'
        ]);

        // dd($request->all());

        $stocks = new Stock();
        $stocks->item = $request->item;
        $stocks->price = $request->price;
        $stocks->quantity = $request->quantity;
        $stocks->category_id = $request->category;

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->extension();
            $filename = time() . '.' . $extension;
            $file->move('upload/photo/', $filename);
            $stocks->image = $filename;
        }

        $stocks->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $stock = Stock::with('category')->find($id);
        return view('stock.read', compact('stock'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stock = Stock::find($id);
        $categories = Category::all();
        return view('stock.edit', compact('stock', 'categories'));
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
        $request->validate([
            'item' => 'required | max:255',
            'price' => 'required',
            'quantity' => 'required'
        ]);

        $stock = Stock::find($id);
        $stock->item = $request->item;
        $stock->price = $request->price;
        $stock->quantity = $request->quantity;
        $stock->category_id = $request->category;

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->extension();
            $filename = time() . '.' . $extension;
            $file->move('upload/photo/', $filename);
            $stock->image = $filename;
        }

        $stock->save();

        return view('stock.read', compact('stock'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stock = Stock::find($id);
        $stock->delete();
        return back();
    }
}

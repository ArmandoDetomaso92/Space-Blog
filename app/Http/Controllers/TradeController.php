<?php

namespace App\Http\Controllers;

use App\Models\Trade;
use Illuminate\Http\Request;
use App\Http\Requests\TradeRequest;

class TradeController extends Controller
{
    public function __construct() {
        $this->middleware('auth')->except('index', 'show');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trades = Trade::all();
        return view('trade.index', compact('trades'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('trade.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TradeRequest $request)
    {
        $trade = Trade::create([
            // 'name'=> $request->name,
            // 'price'=> $request->price,
            // 'description'=> $request->description,
            'cover'=> $request->file('cover')->store('public/image'),
        ]);
        return redirect(route('trade.index'))->with('tradeCreated','Hai inserito correttamente la tua immagine');
    }

    /**
     * Display the specified resource.
     */
    public function show(Trade $trade)
    {
        return view('trade.show',compact('trade'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Trade $trade)
    {
        return view('trade.edit', compact('trade')); 
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(TradeRequest $request, Trade $trade)
    {
            $trade->update([
                    // 'name'=> $request->name,
                    // 'price'=> $request->price,
                    // 'description'=> $request->description,
                    'cover'=> $request->file('cover')->store('public/image'),
                ]);              
        return redirect(route('trade.index'))->with('tradeUpdated','Hai correttamente aggiornato l\'immagine');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $trade = Trade::find($id);
        $trade->delete();
        return redirect(route('trade.index'))->with('tradeDeleted', 'Immagine cancellata');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Sell;
use Illuminate\Http\Request;
use App\Http\Requests\SellRequest;
use Illuminate\Support\Facades\Storage;

class SellController extends Controller
{
    public function __construct() {
        $this->middleware('auth')->except('index', 'show');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sells = Sell::all();
        return view('sell.index', compact('sells'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sell.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SellRequest $request)
    {
        $sell = Sell::create([
            'name'=> $request->name,
            'price'=> $request->price,
            'description'=> $request->description,
            'cover'=> $request->file('cover')->store('public/foto'),
        ]);
        return redirect(route('sell.index'))->with('sellCreated','Hai inserito correttamente il tuo annuncio');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sell $sell)
    {
        return view('sell.show',compact('sell'));   
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sell $sell)
    {
        return view('sell.edit',compact('sell')); 
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(SellRequest $request, Sell $sell)
    // {
    //     if($request->cover){
    //         $sell->update([
    //                 'name'=> $request->name,
    //                 // 'price'=> $request->price,
    //                 'description'=> $request->description,
    //                 'cover'=> $request->file('cover')->store('public/foto'),
    //             ]); 
    //     }else{
    //         $sell->update([
    //             'name'=>$request->name,
    //             // 'price'=>$request->price,
    //             'description'=> $request->description,
    //         ]);
    //     }       
    //     return redirect(route('sell.index'))->with('sellUpdated','Hai correttamente aggiornato l\'annuncio');
    // }


    public function update(Request $request, Sell $sell)
{
    // Verifica che l'utente abbia caricato una nuova immagine
    if($request->hasFile('cover')) {
        $image = $request->file('cover');

        // Salva la nuova immagine ed elimina quella vecchia
        Storage::delete($sell->cover);
        $path = $image->store('public/images');
        $sell->cover = $path;
    }

    // Aggiorna il testo dell'articolo
    $sell->description = $request->input('description');

    $sell->name = $request->input('name');

    // Salva le modifiche all'articolo
    $sell->save();

    return redirect()->route('sell.show', ['sell' => $sell]);
}
    /**
     * Remove the specified resource from storage.
     */

    public function destroy(Sell $sell)
    {
        $sell->delete();
        return redirect(route('sell.index'))->with('sellDeleted', 'Annuncio cancellato');
    }
}

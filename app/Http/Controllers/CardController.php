<?php

namespace App\Http\Controllers;

use Session;
use App\Card;
use App\Edition;
use App\Rarity;
use App\Artist;
use App\Race;
use App\Type;
use App\Http\Requests\StoreCardRequest;
use Illuminate\Http\Request;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cards = Card::with(['edition', 'rarity'])->get();

        return view('cards.index', compact('cards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $editions = Edition::all();
        $rarities = Rarity::all();
        $races = Race::all();
        $types = Type::all();
        $artists = Artist::all();

        return view('cards.create', compact('editions', 'rarities', 'races', 'types', 'artists'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCardRequest $request)
    {

        //dd($request->all());
        $card = new Card($request->all());
        $card->save();
        $card->artists()->sync($request->artist);
        $card->races()->sync($request->race);
        $card->types()->sync($request->type);

        Session::flash('message', 'Запись успешно добавлена.');
        return redirect('/cards');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function show(Card $card)
    {
        $card->load('edition', 'rarity', 'races', 'artists', 'types');

        return view('cards.show', compact('card'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function edit(Card $card)
    {
        $card->load('edition', 'rarity', 'races');

        $editions = Edition::all();
        $rarities = Rarity::all();
        $races = Race::all();
        $types = Type::all();
        $artists = Artist::all();

        return view('cards.edit', compact('card', 'editions', 'rarities', 'races', 'types', 'artists'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCardRequest $request, Card $card)
    {
        $card->update($request->all());
        $card->artists()->sync($request->artist);
        $card->races()->sync($request->race);
        $card->types()->sync($request->type);

        Session::flash('message', 'Запись успешно обновлена.');
        return redirect('/cards');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function destroy(Card $card)
    {
        $card->delete();

        Session::flash('message', 'Запись успешно удалена.');
        return redirect('/cards');
    }
}

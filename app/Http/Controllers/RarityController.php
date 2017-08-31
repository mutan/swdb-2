<?php

namespace App\Http\Controllers;

use Session;
use App\Rarity;
use App\Http\Requests\StoreRarityRequest;

class RarityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rarities = Rarity::all();

        return view('rarities.index', compact('rarities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rarities.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRarityRequest $request)
    {
        $rarity = new Rarity($request->all());
        $rarity->save();

        Session::flash('message', 'Запись успешно добавлена.');
        return redirect('/rarities');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rarity  $rarity
     * @return \Illuminate\Http\Response
     */
    public function show(Rarity $rarity)
    {
        return view('rarities.show', compact('rarity'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rarity  $rarity
     * @return \Illuminate\Http\Response
     */
    public function edit(Rarity $rarity)
    {
        return view('rarities.edit', compact('rarity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rarity  $rarity
     * @return \Illuminate\Http\Response
     */
    public function update(StoreRarityRequest $request, Rarity $rarity)
    {
        $rarity->update($request->all());

        Session::flash('message', 'Запись успешно обновлена.');
        return redirect('/rarities');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rarity  $rarity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rarity $rarity)
    {
        $rarity->delete();

        Session::flash('message', 'Запись успешно удалена.');
        return redirect('/rarities');
    }
}

<?php

namespace App\Http\Controllers;

use Session;
use App\Race;
// use Illuminate\Http\Request;
use App\Http\Requests\StoreRaceRequest;

class RaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $races = Race::all();

        return view('races.index', compact('races'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('races.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRaceRequest $request)
    {
        $race = new Race($request->all());
        $race->save();

        Session::flash('message', 'Запись успешно добавлена.');
        return redirect('/races');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Race  $race
     * @return \Illuminate\Http\Response
     */
    public function show(Race $race)
    {
        return view('races.show', compact('race'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Race  $race
     * @return \Illuminate\Http\Response
     */
    public function edit(Race $race)
    {
        return view('races.edit', compact('race'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Race  $race
     * @return \Illuminate\Http\Response
     */
    public function update(StoreRaceRequest $request, Race $race)
    {
        $race->update($request->all());

        Session::flash('message', 'Запись успешно обновлена.');
        return redirect('/races');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Race  $race
     * @return \Illuminate\Http\Response
     */
    public function destroy(Race $race)
    {
        $race->delete();

        Session::flash('message', 'Запись успешно удалена.');
        return redirect('/races');
    }
}

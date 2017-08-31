<?php

namespace App\Http\Controllers;

use Session;
use App\Edition;
//use Illuminate\Http\Request;
use App\Http\Requests\StoreEditionRequest;

class EditionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() // edition
    {
        $editions = Edition::all();

        return view('editions.index', compact('editions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() // edition/create
    {
        return view('editions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEditionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEditionRequest $request) // edition
    {
        $edition = new Edition($request->all());
        $edition->save();

        Session::flash('message', 'Запись успешно добавлена.');
        return redirect('/editions');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Edition  $edition
     * @return \Illuminate\Http\Response
     */
    public function show(Edition $edition) // edition/{edition}
    {
        return view('editions.show', compact('edition'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Edition  $edition
     * @return \Illuminate\Http\Response
     */
    public function edit(Edition $edition) // edition/{edition}/edit
    {
        return view('editions.edit', compact('edition'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\StoreEditionRequest  $request
     * @param  \App\Edition  $edition
     * @return \Illuminate\Http\Response
     */
    public function update(StoreEditionRequest $request, Edition $edition) // edition/{edition} 
    {
        $edition->update($request->all());

        Session::flash('message', 'Запись успешно обновлена.');
        return redirect('/editions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Edition  $edition
     * @return \Illuminate\Http\Response
     */
    public function destroy(Edition $edition) // edition/{edition}
    {
        $edition->delete();

        Session::flash('message', 'Запись успешно удалена.');
        return redirect('/editions');
    }
}

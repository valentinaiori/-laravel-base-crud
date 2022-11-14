<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view ('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('comics.create');
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
            "title" => 'required|max:255|min:5|unique:comics',
            "description" => 'required',
            "thumb" => 'required|max:255|url',
            "price" => 'required|min:1|max:999.99',
            "series" => 'required|max:50',
            "sale_date" => 'required|date',
            "type" => 'required|max:15'
        ],[
            'required' => ':attribute è obbligatorio',
            'min.title' => ':attribute deve essere lungo almeno :min caratteri',
            'min.price' => 'Il prezzo deve essere almeno di :min euro'
        ]);

        $data = $request->all();
        $newComic = new Comic();
        $newComic->title = $data['title'];
        $newComic->description = $data['description'];
        $newComic->thumb = $data['thumb'];
        $newComic->price = $data['price'];
        $newComic->series = $data['series'];
        $newComic->sale_date = $data['sale_date'];
        $newComic->type = $data['type'];
        $newComic->save();

        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view ('comics.edit', compact('comic'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {

        $request->validate([
            "title" => 'required|max:255|min:5',
            "description" => 'required',
            "thumb" => 'required|max:255|url',
            "price" => 'required|min:1|max:999.99',
            "series" => 'required|max:50',
            "sale_date" => 'required|date',
            "type" => 'required|max:15'
        ]);


        $data = $request->all();
        $comic->update($data);
        return redirect()-> route('comics.show', compact('comic'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()-> route('comics.index');

    }
}

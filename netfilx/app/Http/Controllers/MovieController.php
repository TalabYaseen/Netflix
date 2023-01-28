<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Picture;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::get();
        session()->put('name', 'talab yaseen');
        // $movies = Movie::all();
        return view('netflix.index', ['movies'=>$movies]);
        // return $movies;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('netflix.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $movie = new Movie();
        $movie->movie_name = $request->movie_name;
        $movie->movie_description = $request->movie_desc;
        $movie->movie_gener = $request->movie_gen;
        $movie->save();

        $Pic = New Picture();
        $movie_img = $request->file('movie_pic')->getClientOriginalName();
        $request->file('movie_pic')->storeAs('public/image', $movie_img);
        $Pic->picture_name = $movie_img;
        $Pic->movie_id = $movie->id;
        $Pic->save();
        return response("done");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $movie = Movie::findorfail($id);
        return view('netflix.update',['movie'=>$movie]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $movie = Movie::findorFail($id);
        $movie->movie_name = $request->movie_name;
        $movie->movie_description = $request->movie_desc;
        $movie->movie_gener = $request->movie_gen;
        $movie->save();

        $Pic = New Picture();
        $movie_img = $request->file('movie_pic')->getClientOriginalName();
        $request->file('movie_pic')->storeAs('public/image', $movie_img);
        $Pic->picture_name = $movie_img;
        $Pic->movie_id = $movie->id;
        $Pic->save();
        return  redirect()->route('netflix.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $movie = Movie::findorfail($id)->delete();
        return redirect()->route('netflix.index');
    }
}

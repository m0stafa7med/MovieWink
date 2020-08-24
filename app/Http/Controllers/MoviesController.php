<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $popularMovies =Http::withToken('eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI4OWU4NzI5MjdlMjU4MzNkNDViZTRmMWE2ZjU0N2MzMCIsInN1YiI6IjVmM2IxNTY3OGFjM2QwMDAzNTFhYmI1MCIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.bHig4yaMYxLOyu14KRavwKnRSg_R6-k5r55PHAk8tng','bearer')
         ->get('https://api.themoviedb.org/3/movie/popular')
         ->json()['results'];

         $genresArray = Http::withToken('eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI4OWU4NzI5MjdlMjU4MzNkNDViZTRmMWE2ZjU0N2MzMCIsInN1YiI6IjVmM2IxNTY3OGFjM2QwMDAzNTFhYmI1MCIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.bHig4yaMYxLOyu14KRavwKnRSg_R6-k5r55PHAk8tng','bearer')
         ->get('https://api.themoviedb.org/3/genre/movie/list')
         ->json()['genres'];


         $nowPlayingMovies =Http::withToken('eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI4OWU4NzI5MjdlMjU4MzNkNDViZTRmMWE2ZjU0N2MzMCIsInN1YiI6IjVmM2IxNTY3OGFjM2QwMDAzNTFhYmI1MCIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.bHig4yaMYxLOyu14KRavwKnRSg_R6-k5r55PHAk8tng','bearer')
         ->get('https://api.themoviedb.org/3/movie/now_playing')
         ->json()['results'];


         $genres=collect($genresArray)->mapWithKeys(function($genre)
         {
            return [$genre['id']=>$genre['name']];
         });
         dump($nowPlayingMovies);
       

        return view('index',[
            'popularMovies'=>$popularMovies,
            'genres'=>$genres,
            'nowPlayingMovies'=>$nowPlayingMovies,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

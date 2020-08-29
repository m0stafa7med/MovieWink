<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;
class SearchDropdown extends Component
{
    public $search="hello there";

    public function render()
    {
        $searchResults=[];
        if (strlen($this->search) >= 2) {
        $searchResults =Http::withToken('eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI4OWU4NzI5MjdlMjU4MzNkNDViZTRmMWE2ZjU0N2MzMCIsInN1YiI6IjVmM2IxNTY3OGFjM2QwMDAzNTFhYmI1MCIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.bHig4yaMYxLOyu14KRavwKnRSg_R6-k5r55PHAk8tng','bearer')
         ->get('https://api.themoviedb.org/3/search/movie?query='.$this->search)
         ->json()['results'];
        }
        //  dump($searchResults);
        
        return view('livewire.search-dropdown',[
            'searchResults'=>$searchResults,
        ]);
    }
}

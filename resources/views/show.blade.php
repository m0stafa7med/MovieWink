@extends('layouts.main')

@section('content')
<div class="movie-info border-b border-gray-800">
    <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <img src="/img/theGodfather1.jpg" alt="theGodfather1" class="w-64 md:w-96">
            <div class="md:ml-24">
              <h2 class="text-4xl font-semibold">
                  The Godfather1 (1972)
              </h2>
              <div class="flex flex-wrap items-center text-gray-400 text-sm  ">
                <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                <span class="ml-1">91%</span>
                <span class="mx-2">|</span>
                <span>24 March 1972</span>
                <span class="mx-2">|</span>
                <span>  Crime, Drama, Thriller</span>
            </div>

            <p class="text-gray-300 mt-8">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias minima quis ratione minus, repellat saepe culpa eos sequi magni ut magnam assumenda autem qui nesciunt facilis suscipit eius explicabo praesentium, nulla voluptatibus amet iure dolorum optio labore! Itaque sed cum id veniam dolore. Aliquid repellendus distinctio officiis at hic nihil?
            </p>
            <div class="mt-12">
                <h4 class="text-white font-semibold"> Featured Cast</h4>
                <div class="flex mt-4">
                    <div>
                        <div>Francis Ford Coppola</div>
                        <div class="text-sm text-gray-400">Directory, Screenplay, Story</div>
                    </div>
                    <div class="ml-8">
                        <div>Mario Puzo</div>
                        <div class="text-sm text-gray-400">Screenplay</div>
                    </div>
                </div>
            </div>

            <div class="mt-12">
                <button class="flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4 
                hover:bg-orange-600 transition ease-in-out duration-150">
                <svg class="w-6 fill-current" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M10 16.5l6-4.5-6-4.5v9zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/></svg>
                <span class="ml-2">Play Trailer</span>

                </button>
            </div>
            </div>
        </div>
    </div>
     {{-- end of movie info  --}}

{{-- start of movie cast  --}}
    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>


            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                {{-- ============================================================================================================ --}}                    
              <div class="mt-8">
                  <a href="#" >
                      <img src="/img/marlonBrando.jpg" alt="marlonBrando"  class="hover:opacity-75 transition-ease-in-out duration-150">
                  </a>
                  
                  <div class="mt-2">
                      <a href="#" class="text-lg mt-2 hover:text-gray-300">Marlon Brando</a>
                      <div class="flex items-center text-gray-400 text-sm mt-1 ">
                          <span class="ml-1">Don Vito Corleone</span>
                      </div>
                  </div>
              </div>
              {{-- ============================================================================================================ --}} 
              <div class="mt-8">
                <a href="#" >
                    <img src="/img/AlPacino.jpg" alt="AlPacino"  class="hover:opacity-75 transition-ease-in-out duration-150">
                </a>
                
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-300">Marlon Brando</a>
                    <div class="flex items-center text-gray-400 text-sm mt-1 ">
                        <span class="ml-1">Michael Corleone</span>
                    </div>
                </div>
            </div>
            {{-- ============================================================================================================ --}} 
            <div class="mt-8">
                <a href="#" >
                    <img src="/img/jamesCaan.jpg" alt="jamesCaan"  class="hover:opacity-75 transition-ease-in-out duration-150">
                </a>
                
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-300">James Caan</a>
                    <div class="flex items-center text-gray-400 text-sm mt-1 ">
                        <span class="ml-1">Sonny Corleone</span>
                    </div>
                </div>
            </div>
            {{-- ============================================================================================================ --}} 
            <div class="mt-8">
                <a href="#" >
                    <img src="/img/johnCazale.jpg" alt="johnCazale"  class="hover:opacity-75 transition-ease-in-out duration-150">
                </a>
                
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-300">John Cazale</a>
                    <div class="flex items-center text-gray-400 text-sm mt-1 ">
                        <span class="ml-1">Fredo Corleone</span>
                    </div>
                </div>
            </div>
            {{-- ============================================================================================================ --}} 
            <div class="mt-8">
                <a href="#" >
                    <img src="/img/robertDuvall.jpg" alt="robertDuvall"  class="hover:opacity-75 transition-ease-in-out duration-150">
                </a>
                
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-300">Robert Duvall</a>
                    <div class="flex items-center text-gray-400 text-sm mt-1 ">
                        <span class="ml-1">Tom Hagen</span>
                    </div>
                </div>
            </div>
            {{-- ============================================================================================================ --}} 
            <div class="mt-8">
                <a href="#" >
                    <img src="/img/taliashire.jpg" alt="taliashire"  class="hover:opacity-75 transition-ease-in-out duration-150">
                </a>
                
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-300">Talia Shire</a>
                    <div class="flex items-center text-gray-400 text-sm mt-1 ">
                        <span class="ml-1">Connie Corleone </span>
                    </div>
                </div>
            </div>
            {{-- ============================================================================================================ --}}
                                 
            </div>


        </div>
    </div>
{{-- end of movie cast  --}}
{{-- start of movie images  --}}
<div class="movie-cast border-b border-gray-800">
    <div class="container mx-auto px-4 py-16">
        <h2 class="text-4xl font-semibold">Images</h2>


        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
            {{-- ============================================================================================================ --}}                    
          <div class="mt-8">
              <a href="#" >
                  <img src="/img/theGodfatherImage1.jpg" alt="theGodfatherImage1"  class="hover:opacity-75 transition-ease-in-out duration-150">
              </a>
           
          </div>
          {{-- ============================================================================================================ --}} 
          <div class="mt-8">
            <a href="#" >
                <img src="/img/theGodfatherImage2.jpg" alt="theGodfatherImage2"  class="hover:opacity-75 transition-ease-in-out duration-150">
            </a>
         
        </div>
        {{-- ============================================================================================================ --}} 
        <div class="mt-8">
            <a href="#" >
                <img src="/img/theGodfatherImage3.jpg" alt="theGodfatherImage3"  class="hover:opacity-75 transition-ease-in-out duration-150">
            </a>
         
        </div>
        {{-- ============================================================================================================ --}} 
        <div class="mt-8">
            <a href="#" >
                <img src="/img/theGodfatherImage4.jpg" alt="theGodfatherImage4"  class="hover:opacity-75 transition-ease-in-out duration-150">
            </a>
         
        </div>
        {{-- ============================================================================================================ --}}                    
        <div class="mt-8">
            <a href="#" >
                <img src="/img/theGodfatherImage5.jpg" alt="theGodfatherImage5"  class="hover:opacity-75 transition-ease-in-out duration-150">
            </a>
         
        </div>
        {{-- ============================================================================================================ --}} 
        </div>


    </div>
</div>
{{-- end of movie images  --}}
@endsection


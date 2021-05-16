@extends('layouts.app')

@section('content')
 <div class="container bg-light mt-3 p-5 rounded-3">
     <input type="hidden" name="_token" value="{{csrf_token()}}">
     <div class="row justify-content-center">
         <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-9 col-sm-12">
             <div class="input-group mb-3 ">
                 <input id="movie-search" type="text" class="form-control" value="fast"  aria-label="Username" aria-describedby="basic-addon1">
             </div>
         </div>
     </div>
     <h3 class="mt-5">Results:</h3>
     <div id="movies-results" class="d-flex flex-wrap gap-5 p-4">
        <form >

        </form>
         <h2 class="mx-auto">Type something to search for movies :)</h2>
     </div>
 </div>
@endsection
@section('scripts')
    <script>
        const movieSearch = document.getElementById('movie-search')
        const moviesResults = document.getElementById('movies-results')

        movieSearch.value = ''
        var typingTimer

        const API_KEY = 'c0728c2a52fcc4c251aba15a5fc1a153'
        const HOSTNAME = 'https://api.themoviedb.org/3/search/movie?'

        movieSearch.addEventListener('input', () => {

            searchValue = movieSearch.value
            clearTimeout(typingTimer)
            typingTimer = setTimeout(() => {

                moviesResults.innerHTML = ''
                fetch(`${HOSTNAME}api_key=${API_KEY}&query=${searchValue}`)
                    .then(response => response.json())
                    .then(data => {
                        if(data === undefined && searchValue !== '') {
                            moviesResults.innerHTML =
                                `
                        <h2 class="mx-auto">Movies not found :(</h2>
                    `
                        } else {

                            let iterations = Math.floor(data.results.length)
                            mergePages(iterations, searchValue)

                        }
                    })
                    .catch(err => console.log(err))

                if(searchValue === '') {
                    moviesResults.innerHTML =
                        `
                <h2 class="mx-auto">Type something to search for movies :)</h2>
            `
                }
            }, 1000)
        })

        const mergePages = (iterations, search) => {
            for(let i = 1; i <= iterations; i++) {
                fetch(`${HOSTNAME}&query=${search}&page=${i}&api_key=${API_KEY}`)
                    .then(response => response.json())
                    .then(data => {
                        for(let j = 0; j < data.results.length; j++)
                        {
                            if(moviesResults.childElementCount >= 40) break
                            movie = data.results[j]

                            moviesResults.innerHTML +=`
                <div class="card border-0 bg-transparent movie-card" style="width: 12rem; float: left;">
                    <div class="card-body p-0" >
                        <img onclick="window.location.href='/movie/${movie.id}'" src="${(movie.poster_path === 'N/A') ? 'images/no_image.png' : 'https://image.tmdb.org/t/p/w185' + movie.poster_path }" alt="${movie.title}">
                        <h6 class="card-title text-center mt-1">${movie.title}</h6>
                        <form action="addMovie" method="post">
                        @csrf
                                <input type="hidden" name="user_id" value="1">
                                <input name="movie_api_id" value="${movie.id}" type="hidden">
                                <button type="submit" name="add" class="btn btn-primary" >Add</button>
                            </form>
                    </div>
                </div>`
                        }
                    })
                    .catch(err => console.log(err))
            }
        }
    </script>
@endsection

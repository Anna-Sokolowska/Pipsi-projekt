const movieContainer = document.getElementById('movie-container')

const API_KEY = ''
const HOSTNAME = 'http://www.omdbapi.com/?'

const getMovie = () => {
    let movieId = sessionStorage.getItem('movieId')

    fetch(`${HOSTNAME}i=${movieId}&apikey=${API_KEY}`)
        .then(response => response.json())
        .then(movie => {
            console.log(movie)
            let output = 
            `
            <div class="row">
                <div class="col-md-4">
                    <img src="${(movie.Poster === 'N/A') ? 'images/no_image.png' : movie.Poster }" width="300" height="500" >
                </div>
                <div class="col-md-8">
                    <h2>${movie.Title}</h2>
                    <ul class="list-group">
                    <li class="list-group-item"><strong>Genre:</strong> ${movie.Genre}</li>
                    <li class="list-group-item"><strong>Released:</strong> ${movie.Released}</li>
                    <li class="list-group-item"><strong>Rated:</strong> ${movie.Rated}</li>
                    <li class="list-group-item"><strong>IMDB Rating:</strong> ${movie.imdbRating}</li>
                    <li class="list-group-item"><strong>Director:</strong> ${movie.Director}</li>
                    <li class="list-group-item"><strong>Writer:</strong> ${movie.Writer}</li>
                    <li class="list-group-item"><strong>Actors:</strong> ${movie.Actors}</li>
                    </ul>
                </div>
                </div>
                <div class="row mt-3">
                    <div class="card p-3">
                        <h3>Plot</h3>
                        ${movie.Plot}
                        <hr>
                        
                    </div>
                </div>
                <a href="index.html" class="btn btn-default mt-3">Go Back To Search</a>
            `
            movieContainer.innerHTML = output
        })
        .catch(err => console.log(err))
}

getMovie()
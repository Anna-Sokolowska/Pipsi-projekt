const movieSearch = document.getElementById('movie-search')
const moviesResults = document.getElementById('movies-results')

movieSearch.value = ''
var typingTimer

// Link do API: http://www.omdbapi.com/apikey.aspx?__EVENTTARGET=freeAcct&__EVENTARGUMENT=&__LASTFOCUS=&__VIEWSTATE=%2FwEPDwUKLTIwNDY4MTIzNQ9kFgYCAQ9kFgICBw8WAh4HVmlzaWJsZWhkAgIPFgIfAGhkAgMPFgIfAGhkGAEFHl9fQ29udHJvbHNSZXF1aXJlUG9zdEJhY2tLZXlfXxYDBQtwYXRyZW9uQWNjdAUIZnJlZUFjY3QFCGZyZWVBY2N0oCxKYG7xaZwy2ktIrVmWGdWzxj%2FDhHQaAqqFYTiRTDE%3D&__VIEWSTATEGENERATOR=5E550F58&__EVENTVALIDATION=%2FwEdAAU%2BO86JjTqdg0yhuGR2tBukmSzhXfnlWWVdWIamVouVTzfZJuQDpLVS6HZFWq5fYpioiDjxFjSdCQfbG0SWduXFd8BcWGH1ot0k0SO7CfuulHLL4j%2B3qCcW3ReXhfb4KKsSs3zlQ%2B48KY6Qzm7wzZbR&at=freeAcct&Email=
const API_KEY = 'a402efe8'
const HOSTNAME = 'http://www.omdbapi.com/?'

movieSearch.addEventListener('input', () => {

    searchValue = movieSearch.value
    clearTimeout(typingTimer)
    typingTimer = setTimeout(() => {

        moviesResults.innerHTML = ''
        fetch(`${HOSTNAME}s=${searchValue}&apikey=${API_KEY}`)
            .then(response => response.json())
            .then(data => {

                if(data.Search === undefined && searchValue !== '') {
                    moviesResults.innerHTML = 
                    `
                        <h2 class="mx-auto">Movies not found :(</h2>
                    `
                } else {

                    let iterations = Math.floor(data.totalResults / 10 + 1)
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
    document.getElementById("share").innerHTML +=
    `
    <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Share
    </button>`

    for(let i = 1; i <= iterations; i++) {
        fetch(`${HOSTNAME}s=${search}&page=${i}&apikey=${API_KEY}`)
        .then(response => response.json())
        .then(data => {
            
            for(let j = 0; j < data.Search.length; j++) 
            {
                if(moviesResults.childElementCount >= 40) break
                movie = data.Search[j]

                moviesResults.innerHTML +=
                `
                <div class="card border-0 bg-transparent movie-card" style="width: 12rem; float: left;">
                    <div class="card-body p-0" onclick="movieSelected('${movie.imdbID}')">
                        <img src="${(movie.Poster === 'N/A') ? 'images/no_image.png' : movie.Poster }" width="100" height="300" class="card-img-top" alt="...">
                        <h6 class="card-title text-center mt-1">${movie.Title}</h6>
                        
                    </div>
                    <div class="card-title">
                    <button class="btn btn-secondary">Add</button> <!-- onClick >> Insert INTO SQL --->
                    </div>
                </div>`
            }
        })
        .catch(err => console.log(err))
    }
}

const movieSelected = id => {
    sessionStorage.setItem('movieId', id)
    window.location = 'movie.html'
}
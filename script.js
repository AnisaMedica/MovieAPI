function searchMovies(keyword) {
    let xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function() {
        if(xhr.readyState === 4 && xhr.status === 200) {
            let movies = JSON.parse(xhr.response);
            showMovies(movies.Search);
        }
    }
    xhr.open('GET', 'http://www.omdbapi.com/?i=tt3896198&apikey=edeee9d2&s=' + keyword);
    xhr.send();
}

function showMovies(movies) {
    let cards = '';
    movies.forEach(function (movies) {
        cards += `<div class="col-4 my-3">
    <div class="card">
        <img src="${movies.Poster}" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">${movies.Title}</h5>
          <h6 class="card-subtitle mb-2 text-muted">${movies.Year}</h6>
          <a href="detail.php?id=${movies.imdbID}" class="btn btn-primary">Show detail</a>
        </div>
      </div>
</div>`;
    });
    movieList.innerHTML = cards;
}



let movieList = document.querySelector('.movie-list');
let inputKeyword = document.querySelector('.input-keyword');
let searchButton = document.querySelector('.search-button');

searchMovies('avengers');

searchButton.addEventListener('click', function() {
    searchMovies(inputKeyword.value);
});
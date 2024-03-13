$(document).ready(function() {
    const apiKey = 'faeaa7283d75961bc38df2f4b21f2265';
    const baseUrl = 'https://api.themoviedb.org/3/';
    const carousel = $('#movieCarousel');

    // Function to fetch movies from TMDb API
    function fetchMovies() {
        $.ajax({
            url: baseUrl + 'discover/movie',
            method: 'GET',
            data: {
                api_key: apiKey,
                sort_by: 'popularity.desc'
            },
            success: function(response) {
                const movies = response.results;
                movies.forEach(function(movie) {
                    // Add each movie to the carousel
                    carousel.append(`
                        <div class="item">
                            <div class="box">
                                <div class="imgBox">
                                    <img src="https://image.tmdb.org/t/p/w500${movie.poster_path}" alt="${movie.title}">
                                    <div class="icon">
                                        <i class="far fa-heart"></i>
                                        <i class="fas fa-share-alt"></i>
                                        <i class="fas fa-plus"></i>
                                    </div>
                                </div>

                                <div class="content">
                                    <i id="palybtn" class="fas fa-play"></i>
                                </div>
                                <div class="text">
                                    <h3>${movie.title}</h3>
                                    <div class="time flex">
                                        <span>${movie.release_date}</span>
                                        <i class="fas fa-circle"></i>
                                        <a>Genres Here</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `);
                });
            },
            error: function(err) {
                console.error('Error fetching movies:', err);
            }
        });
    }

    // Initial fetch of movies
    fetchMovies();

    // Load more movies when "MORE VIDEO" button is clicked
    $('#moreMoviesBtn').click(function() {
        fetchMovies();
    });
});

<?php
$id = $_GET['id'];
$movie = file_get_contents('http://www.omdbapi.com/?i=tt3896198&apikey=edeee9d2&i=' . urldecode($id));
$movie = json_decode($movie, true);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>detail Movie</title>
  </head>
  <body>
    <div class="container">
        <div class="row my-4">
            <div class="col">
                <h1>detail Movie</h1>
            </div>
        </div>

        <div class="col">
            <ul class="list-group">
                
            <li class="list-group-item"><h3><?= $movie['Title'];?></h3></li>
                <li class="list-group-item"><strong>direktor</strong><?= $movie['Director'];?></li>
                <li class="list-group-item"><strong>casts</strong> <?= $movie['Actor'];?></li>
                <li class="list-group-item"><strong>writer :</strong><?= $movie['Writer'];?></li>
                <li class="list-group-item"><strong>Director :</strong><?= $movie['Title'];?></li>
                <li class="list-group-item"><?= $movie['plot'];?></li>
            </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="input-group mb-3">
                    <input type="text" class="form-control input-keyword" placeholder="Search Movie..">
                        <div class="input-group-append">
                          <button class="btn btn-primary search-button" type="button">Button</button>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    
        <div class="row  movie-list"></div>

    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="script.js"></script>
  </body>
</html>
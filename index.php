<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snowflix</title>
    <link rel="icon" href="logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>
<body>
    <div class="background"></div>
    <div class="container">
        <h1 class="text-center"><p style="padding-top:30px; text-align: left;"><i class="fa-regular fa-snowflake"></i> <b>SNOWFLIX</b></p></h1>
        <div class="row">
            <?php 
            $movies = [
                ["title" => "The Walking Dead", "image" => "images/TWD.jpg", "trailer" => "trailers/movie1.mp4"],
                ["title" => "The Walking Dead: Dead City", "image" => "images/deadcity.jpg", "trailer" => "trailers/movie2.mp4"],
                ["title" => "The Walking Dead: Daryl Dixon", "image" => "images/daryl.jpg", "trailer" => "trailers/movie3.mp4"],
                ["title" => "The Walking Dead: The Ones Who Live", "image" => "images/TOWL.jpg", "trailer" => "trailers/movie4.mp4"],
                ["title" => "You Don't Mess With the Zohan", "image" => "images/zohan.jpg", "trailer" => "trailers/movie5.mp4"],
                ["title" => "50 First Dates", "image" => "images/50firstdates.jpg", "trailer" => "trailers/movie6.mp4"],
                ["title" => "The Breakfast Club", "image" => "images/TBC.jpg", "trailer" => "trailers/movie7.mp4"],
                ["title" => "Superbad", "image" => "images/superbad.jpg", "trailer" => "trailers/movie8.mp4"],
                ["title" => "Scott Pilgrim Vs. The World", "image" => "images/scottpilgrim.jpg", "trailer" => "trailers/movie9.mp4"],
                ["title" => "Whiplash", "image" => "images/Whiplash.jpg", "trailer" => "trailers/movie10.mp4"],
            ];
            foreach ($movies as $movie) {
                echo '<div class="col-md-3">';
                echo '<div class="card">';
                echo '<a href="#" onclick="showTrailer(\'' . $movie["trailer"] . '\')">';
                echo '<img src="' . $movie["image"] . '" class="card-img-top" alt="' . $movie["title"] . '">';
                echo '</a>';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $movie["title"] . '</h5>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
    
    <div id="trailerModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Trailer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <video id="trailerVideo" width="100%" controls></video>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <section class="footer"><p style="color: #c6c7d1">&copy; <b>SNOWFLIX 2024. </b> All rights reserved.</p></section>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>


<?php

require_once __DIR__ . "/models/Movie.php";

$avatar = new Movie("Avatar", "fantascienza", 180);

// $pulpFiction = new Movie("Pulp Fiction", "Thriller", 174);

echo $avatar->getdetails();
// echo $pulpFiction->getDetails();

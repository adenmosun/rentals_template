<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 
// get database connection
include_once '../config/database.php';
 
// instantiate movie object
include_once '../objects/movie.php';
 
$database = new Database();
$db = $database->getConnection();
 
$movie = new Movie($db);
 
// get posted data
$data = json_decode(file_get_contents("php://input"));
 
// set movie property values
$movie->title = $data->title;
$movie->year = $data->year;
$movie->genre = $data->genre;
$movie->ratings = $data->ratings;
$movie->created_at = date('Y-m-d H:i:s');
 
// create the movie
if($movie->create()){
    echo '{';
        echo '"message": "movie was created."';
    echo '}';
}
 
// if unable to create the movie, tell the user
else{
    echo '{';
        echo '"message": "Unable to create movie."';
    echo '}';
}
?>
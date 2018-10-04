<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
 
// include database and object files
include_once '../config/database.php';
include_once '../objects/movies.php';
 
// instantiate database and movie object
$database = new Database();
$db = $database->getConnection();
 
// initialize object
$movie = new Movie($db);
 
// query movies
$stmt = $movie->read();
$num = $stmt->rowCount();
 
// check if more than 0 record found
if($num>0){
 
    // movies array
    $movies_arr=array();
    $movies_arr["records"]=array();
 

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        // extract row
        // this will make $row['name'] to
        // just $name only
        extract($row);
 
        $movie_item=array(
            "id" => $id,
            "title" => $title,
            "year" => $year,
            "genre" => $genre,
            "ratings" => $ratings,
            "created_at" => $created_at
        );
 
        array_push($movies_arr["records"], $movie_item);
    }
 
    echo json_encode($movies_arr);
}
 
else{
    echo json_encode(
        array("message" => "No movies found.")
    );
}
?>

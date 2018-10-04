<?php


//endpoints

//Fetch --->  http://localhost/rentals_template/api/movies/read.php

//Fetch by id --->   http://localhost/rentals_template/api/movies/read_id.php?id=2

//delete ---->    http://localhost/rentals_template/api/movies/delete.php?id=2


//update --->  http://localhost/rentals_template/api/movies/update.php





class Movie{
 
    // database connection and table name
    private $conn;
    private $table_name = "movies";
 
    // object properties
    public $id;
    public $title;
    public $year;
    public $genre;
    public $ratings;
    public $created_at;
 
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }


// read movies
function read(){
 
    // select all query
    $query = "SELECT * FROM movies ORDER BY id DESC";
 
    // prepare query statement
    $stmt = $this->conn->prepare($query);
 
    // execute query
    $stmt->execute();
 
    return $stmt;
}


function create(){
 
    // query to insert record
    $query = "INSERT INTO
                " . $this->table_name . "
            SET
                title=:title, year=:year, genre=:genre, ratings=:ratings, created_at=:created_at";
 
    // prepare query
    $stmt = $this->conn->prepare($query);
 
    // sanitize
    $this->title=htmlspecialchars(strip_tags($this->title));
    $this->year=htmlspecialchars(strip_tags($this->year));
    $this->genre=htmlspecialchars(strip_tags($this->genre));
    $this->ratings=htmlspecialchars(strip_tags($this->ratings));
    $this->created_at=htmlspecialchars(strip_tags($this->created_at));
 
    // bind values
    $stmt->bindParam(":title", $this->title);
    $stmt->bindParam(":year", $this->year);
    $stmt->bindParam(":genre", $this->genre);
    $stmt->bindParam(":ratings", $this->ratings);
    $stmt->bindParam(":created_at", $this->created_at);
 
    // execute query
    if($stmt->execute()){
        return true;
    }
 
    return false;
     
}


// used when filling up the update product form
function readOne(){
 
    // query to read single record
    $query = "SELECT
                m.title, m.year, m.genre, m.ratings, m.created_at
            FROM
                " . $this->table_name . " 
            WHERE
                m.id = ?
            LIMIT
                0,1";
 
    // prepare query statement
    $stmt = $this->conn->prepare( $query );
 
    // bind id of product to be updated
    $stmt->bindParam(1, $this->id);
 
    // execute query
    $stmt->execute();
 
    // get retrieved row
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
 
    // set values to object properties
    $this->title = $row['title'];
    $this->year = $row['year'];
    $this->genre = $row['genre'];
    $this->ratings = $row['ratings'];
    $this->created_at = $row['created_at'];
}

function update(){
 
    // update query
    $query = "UPDATE
                " . $this->table_name . "
            SET
                title = :title,
                year = :year,
                genre = :genre,
                ratings = :ratings,
                created_at = :created_at
            WHERE
                id = :id";
 
    // prepare query statement
    $stmt = $this->conn->prepare($query);
 
    // sanitize
    $this->title=htmlspecialchars(strip_tags($this->title));
    $this->year=htmlspecialchars(strip_tags($this->year));
    $this->genre=htmlspecialchars(strip_tags($this->genre));
    $this->ratings=htmlspecialchars(strip_tags($this->ratings));
    $this->id=htmlspecialchars(strip_tags($this->id));
 
    // bind new values
    $stmt->bindParam(':title', $this->title);
    $stmt->bindParam(':year', $this->year);
    $stmt->bindParam(':genre', $this->genre);
    $stmt->bindParam(':ratings', $this->ratings);
    $stmt->bindParam(':id', $this->id);
 
    // execute the query
    if($stmt->execute()){
        return true;
    }
 
    return false;
}

// delete the product
function delete(){
 
    // delete query
    $query = "DELETE FROM movies WHERE id = ?";
 
    // prepare query
    $stmt = $this->conn->prepare($query);
 
    // sanitize
    $this->id=htmlspecialchars(strip_tags($this->id));
 
    // bind id of record to delete
    $stmt->bindParam(1, $this->id);
 
    // execute query
    if($stmt->execute()){
        return true;
    }
 
    return false;
     
}

}

?>

<?php
$host = "db4free.net:3306";
$db_name = "rental_template";
$username = "temitayo";
$password = "rentals.";

try {
    $connection = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);


} catch(PDOException $e) {
    echo $e->getMessage();
    }
?>

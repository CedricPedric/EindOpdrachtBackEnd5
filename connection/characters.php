<?php 
    require ('connection.php');
?>

<?php
function getCharacters(){

// maak een verbinding
    $connection = connect();

// maak een query
    $query = "SELECT * FROM characters";

// voorbereid een query
    $statement = $connection->prepare($query);

// voer de query uit
    $statement->execute();

// haal de result op
    $result = $statement->fetchALl();

    return $result;

}

?>
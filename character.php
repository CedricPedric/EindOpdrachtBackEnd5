<?php
    require("connection/characters.php");
    $characters = getCharacters();
?>

<?php 

if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $character = $_GET['character'] - 1;
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Character - <?=$characters[$character]['name']?></title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="resources/css/style.css" rel="stylesheet"/>
</head>
<body>
<header><h1><?=$characters[$character]['name']?></h1>
    <a class="backbutton" href="index.php"><i class="fas fa-long-arrow-alt-left"></i> Terug</a></header>
<div id="container">
    <div class="detail">
        <div class="left">
            <img class="avatar" src=resources/images/<?=$characters[$character]['avatar']?>>
            <div class="stats" style=background-color:<?=$characters[$character]['color']?> >
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-heart"></i></span> <?=$characters[$character]['health']?></li>
                    <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span> <?=$characters[$character]['attack']?></li>
                    <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span> <?=$characters[$character]['defense']?></li>
                </ul>
                <ul class="gear">
                    <li><b>Weapon</b>: <?=$characters[$character]['weapon']?></li>
                    <li><b>Armor</b>: <?=$characters[$character]['armor']?></li>
                </ul>
            </div>
        </div>
        <div class="right">
            <p>
                <?=$characters[$character]['bio']?>
            </p>
        </div>
        <div style="clear: both"></div>
    </div>
</div>
<footer>&copy; Cedric Francis <?php echo date("d/m/Y"); ?></footer>
</body>
</html>

<?}?>
<?php 
    require("connection/characters.php");
    $characters = getCharacters();
?>


<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <meta charset="UTF-8">
    <title>All Characters</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="resources/css/style.css" rel="stylesheet"/>
</head>
</head>
<body>
    

    <header><h1>Alle <?=count($characters)?> characters uit de database</h1></header>
    
    <div id="container">
        <?php foreach($characters as $character){?>
        <a class="item" href="character.php">
            <div class="left">
                <img class="avatar" src=resources/images/<?=$character['avatar']?> >
            </div>
            <div class="right">
                <h2><?=$character['name']?></h2>
                <div class="stats">
                    <ul class="fa-ul">
                        <li><span class="fa-li"><i class="fas fa-heart"></i></span> <?=$character['health']?></li>
                        <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span> <?=$character['attack']?></li>
                        <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span> <?=$character['defense']?></li>
                    </ul>
                </div>
            </div>
            <div class="detailButton"><i class="fas fa-search"></i> bekijk</div>
        </a>
        <?}?>
    </div>


    <footer>&copy; [jenaam] 2023</footer>
</body>
</html>

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
        <h1>Welcome!</h1>
        <?php foreach($characters as $character){
            echo $character['name'] . ", " ;
        }
        ?>
        <!-- <a class="item" href="character.html">
            <div class="left">
                <img class="avatar" src="resources/images/bowser.jpg">
            </div>
            <div class="right">
                <h2>Bowser</h2>
                <div class="stats">
                    <ul class="fa-ul">
                        <li><span class="fa-li"><i class="fas fa-heart"></i></span> 10000</li>
                        <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span> 400</li>
                        <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span> 100</li>
                    </ul>
                </div>
            </div>
            <div class="detailButton"><i class="fas fa-search"></i> bekijk</div>
        </a> -->
    </div>


    <footer>&copy; [jenaam] 2023</footer>
</body>
</html>

<!-- <!DOCTYPE html>
<html lang="en">

<body>
<header><h1>Alle [X] characters uit de database</h1></header>
<div id="container">
    <a class="item" href="character.html">
        <div class="left">
            <img class="avatar" src="resources/images/bowser.jpg">
        </div>
        <div class="right">
            <h2>Bowser</h2>
            <div class="stats">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-heart"></i></span> 10000</li>
                    <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span> 400</li>
                    <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span> 100</li>
                </ul>
            </div>
        </div>
        <div class="detailButton"><i class="fas fa-search"></i> bekijk</div>
    </a>
</div>


<footer>&copy; [jenaam] 2023</footer>
</body>
</html> -->
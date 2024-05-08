<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 4</title>
    <link rel="stylesheet" href="src/index.css">
    <link rel="stylesheet" href="src/task.css">
</head>

<body>
    <header>
        <div>
            <img src="" alt="logo">
        </div>
        <h1>4. Store</h1>
    </header>

    <div id="content">
        <!-- Az induló HTML kódot töröld ki és helyette generáld le a data.php fájlból a játékokat -->
        <!-- Delete the starting HTML code and generate the games from the data.php file -->
        
        <div class="game">
            <!-- Ez egy sima játék leárazás nélkül -->
            <!-- This is a normal game without discount -->
            <img src="img/er.jpg" title="Elden Ring">
            <div class="info">
                <span>59.99€</span>
            </div>
        </div>
        
        <div class="game">
            <!-- Ez egy sima játék leárazva  -->
            <!-- This is a normal game with discount -->
            <img src="img/bg3.jpg" title="Baldur's Gate 3">
            <div class="info">
                <span class="sale">-10%</span>
                <span class="original">59.99€</span>
                <span class="final">53.99€</span>
            </div>
        </div>

        <div class="game">
            <!-- Ez egy ingyenesen játszható játék -->
            <!-- This is a free to play game -->
            <img src="img/cs2.jpg" title="Counter-Strike 2">
            <div class="info">
                <span>Free to Play</span>
            </div>
        </div>

        <div class="game">
            <!-- Ez egy még meg nem jelent játék -->
            <!-- This game hasn't been released yet -->
            <img src="img/hades2.jpg" title="Hades 2">
            <div class="info">
                <span>Add to your wishlist</span>
            </div>
        </div>
    </div>
</body>

</html>
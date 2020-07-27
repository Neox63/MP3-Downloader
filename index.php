<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>MP3 Downloader by Neox</title>
</head>
<body>
    <div class="app">
        <h1 class="title">MP3 Downloader by Neox</h1>
        <div class="content">
            <form method="post">
                <input type="url" name="video" placeholder="Entrez un URL">
                <input type="submit" value="Télécharger">
            </form>
        </div>
    </div>
    
    <?php
        if(isset($_POST["video"])){
            preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $_POST["video"], $match);
            $id = $match[1];
            echo "<h3>Cliquez sur la qualité voulue : </h3>";
        }
    ?>
    <iframe class="iFrame" scrolling="no" src="https://www.yt-download.org/@api/button/mp3/<?php echo $id;?>"></iframe>
</body>
</html>
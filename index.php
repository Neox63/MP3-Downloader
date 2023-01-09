<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="A simple tool to download MP3 from YouTube !">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name=”robots” content="index, follow">

    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">

    <title>🎵 Music Downloader 🎵</title>
</head>
<body>
    <div class="app">
        <h1 class="title">✨ Free <span class="pulse">🎵</span> Downloader ✨</h1>
        <h2>Hey <span class="wave">👋</span> ! Follow my steps to get free MP3 music <span class="pulse">🎵</span> !</h2>
        <form class="content-form" method="post">
            <h3>Alright ! Let's get started ! First i'll need a <a target="_blank" rel="noopener noreferrer" href="https://youtube.com">YouTube</a> URL <span class="point-down">👇</span></h3>
            <input id="input-url" type="url" name="video" placeholder="Put it right there">

            <h3>We're almost there, hit this button below and i'll see what can i do for you <span class="point-down">👇</span></h3>
            <button name="submit" type="submit"><span class="point-right">👉</span> Hit me <span class="point-left">👈</span></button>
        </form>
        <?php
            if (isset($_POST['submit'])) {
                if(!empty($_POST['video'])){
                    preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $_POST['video'], $match);
                    $id = $match[1];
                    echo '<h3>Finally, choose the one that you want <span class="point-down">👇</span></h3>';
                    echo '<iframe scrolling="no" src="https://www.yt-download.org/@api/button/mp3/'.$id.'"></iframe>';
                    echo '<h3>If my tool helped you, leave it a <span class="pulse">⭐</span> on Github !</h3>';
                    echo '<a class="github-button" href="https://github.com/Neox63/MP3-Downloader" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star Neox63/MP3-Downloader-APP on GitHub">Star</a>';
                } else {
                    echo '<h3>Hmmm... Seems like you missed a step 🤔</h3>';
                }
            }
        ?>
    </div>
</body>
</html>
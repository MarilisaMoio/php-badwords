<?php
    $paragraph = $_GET['paragraph'];
    $badword = $_GET['badword'];

    $censored_paragraph = str_replace($badword, "***", $paragraph);
    $par_length = strlen($paragraph);
    $censor_length = strlen($censored_paragraph);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Versione originale:</h2>
    <div class="par-container">
        <p><?= $paragraph ?></p>
        <div>Lunghezza in caratteri: <?= $par_length ?></div>
    </div>
    <h2>Versione censurata:</h2>
    <div class="par-container">
        <p><?= $censored_paragraph ?></p>
        <div>Lunghezza in caratteri: <?= $censor_length ?></div>
    </div>
</body>
</html>
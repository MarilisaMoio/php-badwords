<?php
    $paragraph = $_GET['paragraph'];
    $badword = $_GET['badword'];

    $censored_paragraph = str_replace($badword, "***", $paragraph)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output</title>
</head>
<body>
    <h2>Versione censurata:</h2>
    <div><?= $censored_paragraph ?></div>
</body>
</html>
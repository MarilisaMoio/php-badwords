<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words Converter</title>
</head>
<body>
    <h1>Bad Words Coverter</h1>
    <div>Inserisci qui sotto il testo di base e una sola parola da censurare</div>
    <form action="badwords.php" method="GET">
        <div>
            <textarea name="paragraph" rows="4" cols="40" required></textarea>
        </div>
        <div>
            <input type="text" name="badword" pattern="[A-Za-z]+" required>
            <button type="submit">Invia</button>
        </div>
    </form>
</body>
</html>
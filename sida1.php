<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>sidal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em 0;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em 0;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

    <h1>Sida1</h1>

    <p>This webpage is a survey where you can enter your name, submit it and it will type out your name in several different ways.</p>

    <?php
        echo "<p>Denna text är genererad med utskriftskommandot i PHP</p>";

        if(isset($_POST['submit'])){
            $strName = !empty($_POST['name']) ? $_POST['name'] : "Dittnamn";

            echo "<p>Hej $strName</p>";
            echo "<p>Baklänges: " . strrev($strName) . "</p>";
            echo "<p>Gemener: " . strtolower($strName) . "</p>";
            echo "<p>Versaler: " . strtoupper($strName) . "</p>";
            echo "<p>Antal tecken: " . strlen($strName) . "</p>";
        }
    ?>

    <form method="post" action="">
        <label for="name">Enter your name:</label>
        <input type="text" id="name" name="name">
        <input type="submit" name="submit" value="Skicka">
    </form>

    <?php include 'footer.php'; ?>

</body>
</html>

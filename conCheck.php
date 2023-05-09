<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $servername = "localhost";
    $username = "Aayushman";
    $password = "Aayushman1234$";
    $dbName = "golden_food";
    $db = new mysqli($servername, $username, $password, $dbName);

    if ($db->connect_error) {
        die("<h1>Verbindung zum Server fehlgeschlagen!</h1><h2> Bitte für erneuten Versuch Seite neuladen <br> Beim bestehen des Problems den Administrator kontaktieren!</h2>");
    } else {
        header("Location: loginScreen.html");
        exit();
    }
    ?>
</body>

</html>
<!-- Passare come parametri GET name, mail e age e verificare 
(cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, 
che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack2</title>
</head>
<body>

    <!-- Prendo i query parameters dall'url  -->
    <?php 
        $name = $_GET['name'];
        $email = $_GET['email'];
        $age = $_GET['age'];
    ?>

    <!-- Verifico le query parameters -->
    <?php 
        if(strlen($name) > 3 && strpos($email, '@') !== false && strpos($email, '.') !== false && is_numeric($age) == 1) {
            echo "Accesso riuscito";
        } else {
            echo "Accesso negato";
        }
    ?>
</body>
</html>
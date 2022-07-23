<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack3</title>
</head>
<body>
    <?php 
        $randomNumbersArray = [];
    ?>
    <ul>
        <!-- Finchè la lunghezza dell'array è < 15 -->
        <?php while(count($randomNumbersArray) < 15) {?>
            <!-- Variabile numero random compreso tra 1 e 100 -->
            <?php $randomNumber = rand(1, 100); ?>
            
            <!-- Se il numero non è già compreso nell'array allora lo pusho -->
            <?php if(!in_array($randomNumber, $randomNumbersArray)) {
                array_push($randomNumbersArray, $randomNumber); ?>
                
                <li>
                    <!-- Stampo il numero casuale -->
                    NUMBER: <?php echo $randomNumber ?>
                </li>                
            <?php } ?>
        <?php }?>
    </ul>
</body>
</html>
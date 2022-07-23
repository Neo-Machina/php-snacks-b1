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

    <?php while(count($randomNumbersArray) < 15) {?>
        <?php $randomNumber = rand(1, 100); ?>
        
        <?php if(!in_array($randomNumber, $randomNumbersArray)) {
            array_push($randomNumbersArray, $randomNumber); ?>

            <ul>
                <li>
                    NUMBER: <?php echo $randomNumber ?>
                </li>
            </ul>

        <?php } ?>

    <?php }?>
</body>
</html>
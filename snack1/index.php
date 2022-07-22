<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema. 
Olimpia Milano - Cantù | 55-60 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack1</title>
</head>
<body>
    <!-- Basketball Matches Array -->
    <?php 
        $basketballMatches = [
            [
                'homeTeam' => 'Chigaco Bulls',
                'awayTeam' => 'Philadelphia 76ers',
                'scoreHome' => 100,
                'scoreAway' => 80
            ],
            [
                'homeTeam' => 'Los Angeles Lakers',
                'awayTeam' => 'Boston Celtics',
                'scoreHome' => 98,
                'scoreAway' => 90
            ],
            [
                'homeTeam' => 'Golden State Warriors',
                'awayTeam' => 'Memphis Grizzlies',
                'scoreHome' => 95,
                'scoreAway' => 70
            ]
        ] 
    ?>

    <h2>BASKETBALL MATCHES</h2>

    <?php for($i = 0; $i < count($basketballMatches); $i++) { ?>
        <?php $singleMatch = $basketballMatches[$i]; ?>

        <div>   
            <?php echo $singleMatch['homeTeam']?> - <?php echo $singleMatch['awayTeam']?> | 
            <?php echo $singleMatch['scoreHome']?> - <?php echo $singleMatch['scoreAway']?>
        </div>

    <?php } ?>

</body>
</html>

<!-- Creare un array contenente qualche alunno di un’ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack6</title>
</head>
<body>
    <!-- Array alunni -->
    <?php
        $students = [
            [ 
                'name' => 'Michele',
                'lastname' => 'Rossi',
                'grades' => [6, 5, 8, 9]
                
            ],
            [
                'name' => 'Roberto',
                'lastname' => 'Bianchi',
                'grades' => [8, 6, 6, 7]
                
            ],
            [
                'name' => 'Federica',
                'lastname' => 'Fiori',
                'grades' => [10, 6, 8, 10]
                
            ]
        ];
    ?>

    <ul>
        <?php for($i = 0; $i < count($students); $i++) { ?>
            <?php $singleStudent = $students[$i]; ?>
            
                <li>
                    <div>
                        ALUNNO: <?php echo $singleStudent['name'] ?> 
                                <?php echo $singleStudent['lastname'] ?>
                    </div>
                            
                    <div>
                        MEDIA VOTI: <?php echo array_sum($singleStudent['grades']) / count($singleStudent['grades']) ?> 
                    </div>

                </li> 
        <?php } ?>
    </ul>

</body>
</html>
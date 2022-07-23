<!-- Utilizzare questo array: https://pastebin.com/CkX3680A. 
Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack5</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>  
    <?php
        $db = [
            'teachers' => [
                [
                    'name' => 'Michele',
                    'lastname' => 'Papagni'
                ],
                [
                    'name' => 'Fabio',
                    'lastname' => 'Forghieri'
                ]
            ],
            'pm' => [
                [
                    'name' => 'Roberto',
                    'lastname' => 'Marazzini'
                ],
                [
                    'name' => 'Federico',
                    'lastname' => 'Pellegrini'
                ]
            ]
        ];
    ?>
    <ul class="grey_box d-flex">
        <?php for($i = 0; $i < count($db['teachers']); $i++) { ?>
            <?php $singleTeacher = $db['teachers'][$i]; ?>
            
                <li>
                    INSEGNANTE: <?php echo $singleTeacher['name']?> <?php echo $singleTeacher['lastname']?>
                </li> 
        <?php } ?>
    </ul>

    <ul class="green_box d-flex">
        <?php for($i = 0; $i < count($db['pm']); $i++) { ?>
            <?php $singlePm = $db['pm'][$i]; ?>

            <li>
                PM: <?php echo $singlePm['name']?> <?php echo $singlePm['lastname']?>     
            </li>
        <?php } ?>
    </ul>
</body>
</html>
<!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack4</title>
</head>
<body>
    <?php 
        $longParagraph = 'Lorem ipsum. Dolor sit amet consectetur adipisicing elit. Fugiat tempora dolores. Voluptatem laudantium aut temporibus magni sed adipisci esse quo. Ducimus quaerat eaque maiores at blanditiis voluptates ex dignissimos a.';
        $paragraphs = explode('.', $longParagraph);
    ?>

    <?php for($i = 0; $i < count($paragraphs); $i++) {?>
        <?php $singleParagraph = $paragraphs[$i] ?>

        <p> <?php echo $singleParagraph ?> </p>
    <?php }?>
    
</body>
</html>
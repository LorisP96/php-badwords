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
        $badWord = 'Chi legge è scemo';
        $replaceWord = $_GET['replaceWord'];
        $censuredWord = str_replace($replaceWord, 'una brava persona', $badWord);
    ?>

    <h2><?php echo $badWord ?></h2>
    <p><?php echo strlen($badWord)?></p>
    <h2><?php echo $censuredWord ?></h2>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $string = "oi pão é bom";
    echo strlen($string) . '<br>';
    echo str_word_count($string) . '<br>';
    echo mb_strtoupper($string);
    ?>

    
</body>

</html>
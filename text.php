<?php 
    $censorship = $_GET['censorship'];
    $text = $_GET['text'];

    $censored_text = str_replace($censorship, '***', $text);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <p><?php echo $text." ".strlen($text); ?></p>

    <p><?php echo $censored_text." ".strlen($censored_text); ?></p>

</body>
</html>
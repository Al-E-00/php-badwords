<?php
$title = 'Hello PHP';
$text = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel hic dolores tempora minus sed neque eligendi nam esse, autem dolor corporis cumque accusamus eius eos perferendis officiis rem aperiam labore?
Esse velit sed ipsum dolorem.';

$textLength = strlen($text);

$userVar = key_exists('user-var', $_GET) ? $_GET['user-var'] : '';



if(stripos($userVar,  'React>Vue') !== false) {
    $userVar = str_ireplace('React>Vue', '***', $userVar);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0-beta1/css/bootstrap.min.css' integrity='sha512-o/MhoRPVLExxZjCFVBsm17Pkztkzmh7Dp8k7/3JrtNCHh0AQ489kwpfA3dPSHzKDe8YCuEhxXq3Y71eb/o6amg==' crossorigin='anonymous'/>
</head>
<body>
    <h1><?php echo $title ?></h1>
    <p> <?php echo $text ?>
    <strong> <?php echo $userVar ?></strong>
    <?php echo $text ?>
    <strong> <?php echo $userVar ?></strong>
    <strong> <?php echo $userVar ?></strong>
    <?php echo $text ?>
    <?php echo $text ?>
    <strong> <?php echo $userVar ?></strong>
</p>
<strong>Text length: <?php echo $textLength ?> characters.</strong>
    
</body>
</html>



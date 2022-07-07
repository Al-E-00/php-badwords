<?php
$title = 'Hello PHP';
$text = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel hic dolores tempora minus sed neque eligendi nam esse, autem dolor corporis cumque accusamus eius eos perferendis officiis rem aperiam labore?
Esse velit sed ipsum dolorem.';

$userVar = $_GET['user-var'];

if(stripos($userVar,  'React>Vue') !== false) {
    $userVar = str_ireplace('React>Vue', '********', $userVar);
}
?>


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


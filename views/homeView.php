<?php
    $title="Home - Bootstrap Training";
    $locateCss="css/style.css";
?>

<?php ob_start();
    echo '<h1>Home</h1>';
$header=ob_get_clean();?>

<?php ob_start();
    echo '<p>Content...</p>';
$content=ob_get_clean();?>
<?php require('templates/template.php'); ?>
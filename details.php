<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>PhotouCat</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="index.css">
</head>
<body>

<?php
echo "ciao";
function details($nomIm, $link) {
    $resultat = executeQuery($link, "SELECT description, catId FROM Photo WHERE nomFich=$nomIm");
    $src = glob($GLOBALS['dir'] .$nomIm, GLOB_BRACE);
    echo "<img src='" . $src . "' hspace = '10' border = '5'/>";

}
?>

</body>
</html>
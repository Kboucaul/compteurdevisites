<?php
    function getVisites()
    {
        $file = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'compteurDeVisites' . DIRECTORY_SEPARATOR .'visites.php';
        $nbVisites = 1;
        if (file_exists($file))
        {
            $nbVisites = file_get_contents($file) + 1;
        }
        file_put_contents($file, $nbVisites);
        if ($nbVisites > 1)
            $visites = "visites";
        else
            $visites = "visite";
        return $nbVisites . " " . $visites;
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compteur de visites</title>
</head>
<body>
    <h1 style="text-align: center; color: red"> Bienvenue sur mon compteur de visites</h1>
    <footer style="text-align: center">
        <p><strong>Il y a eu <?= getVisites()?></strong></p>
        <p>Copyright © Kévin Boucault</p>
    </footer>
</body>
</html>
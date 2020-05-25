<?php
    $age = 60;
    $gender = 'Homme';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <title>php partie2 ex2</title>
</head>
<body>
    <p>Vous êtes un<?php
    if ($age >= 18 && $gender == 'Homme'){
        echo ' homme et vous êtes majeur';
    }
    elseif ($age < 18 && $gender == 'Homme'){
        echo ' homme et vous êtes mineur';
    }
    elseif ($age >= 18 && $gender == 'Femme'){
        echo 'e femme et vous êtes majeure';
    }
    elseif ($age < 18 && $gender == 'Femme'){
        echo 'e femme et vous êtes mineure';
    }
    else{
        echo 'e créature prodigieuse';
    }?></p>
</body>
</html>

<?php

$acteurs = [
    0 => [
        'prenom' => 'Brad',
        'nom' => 'PITT'
    ],
    1 => [
        'prenom' => 'Tom',
        'nom' => 'CRUISE'
    ]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <section class="container">
        <table>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
            </tr>
            <tbody>
                <?php foreach ($acteurs as $acteurs) : ?>
                    <tr>
                        <td><?= $acteur["nom"] ?></td>
                        <td><?= $acteur["prenom"] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</body>

</html>
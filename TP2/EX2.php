<?php
// tableau entier
$entiers = range(1, 63);

// tableau /10
$division = array_map(function ($valeur) {
    return $valeur / 10;
}, $entiers);

// tableau sin
$sin = array();
foreach ($division as $valeur) {
    $sin[$valeur] = sin($valeur);
}
?>

<div class="container">
    <div class="tab1">
        indice
        <?php foreach ($entiers as $valeur) : ?>
            <div class="tabtab1"><?= $valeur ?></div>
        <?php endforeach; ?>
    </div>

    <div class="tab2">
        value
        <?php foreach ($division as $valeur) : ?>
            <div class="tabtab2"><?= number_format($valeur, 1) ?></div>
        <?php endforeach; ?>

        <?php foreach ($sin as $x => $sinx) : ?>
            <?= number_format($x, 1) ?>
            <?= number_format($sinx, 4) ?>
        <?php endforeach; ?>
    </div>
</div>
<style>
    .container {
        display: flex
    }

    .tab1 {
        display: flex;
        flex-direction: column;
        margin: 8px;
    }

    .tabtab1 {
        border-style: solid;
        margin: 8px;
        padding: 5px;
        border-width: 2px;
    }

    .tab2 {
        display: flex;
        flex-direction: column;
        margin: 8px;
    }

    .tabtab2 {
        border-style: solid;
        padding: 5px;
        margin: 8px;
        border-width: 2px;
    }
</style>
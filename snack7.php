<?php


$alunni = [
    [
        'name' => 'Giovanni',
        'lastName' => 'Fanti',
        'votes' => [4,10,5,7]
    ],
    [
        'name' => 'Marco',
        'lastName' => 'Rodi',
        'votes' => [2, 3, 4, 5]
    ],
    [
        'name' => 'Nick',
        'lastName' => 'Cani',
        'votes' => [4,10,5,6]
    ],
    [
        'name' => 'Roger',
        'lastName' => 'Reddit',
        'votes' => [9,8,7,6]
    ],
];

?>


<?php
foreach ($alunni as $value) {
?>
    <div>
        <h2>
            <?=
            "{$value['name']} {$value['lastName']}";
            ?>
        </h2>
        <spa>
            Voti: <em>
                <?=
                array_sum($value['votes']) / count($value['votes']);
                ?>
            </em>
        </spa>
    </div>

<?php
}
?>
<?php
$partite = [
    [
        'home' => 'Boston Celtics',
        'away' => 'Miami Heat',
        'homeScore' => 99,
        'awayScore' => 110
    ],
    [
        'home' => 'Philadelphia 76ers',
        'away' => 'LA Clippers',
        'homeScore' => 125,
        'awayScore' => 88
    ],
    [
        'home' => 'Sacramento Kings',
        'away' => 'Orlando Magic',
        'homeScore' => 85,
        'awayScore' => 81
    ],
    [
        'home' => 'Los Angeles Lakers',
        'away' => 'Toronto Raptors',
        'homeScore' => 101,
        'awayScore' => 80
    ],
];
// echo '<pre>' . var_export($partite, true) . '</pre>';
?>

<ul>
    <?php
    for ($i = 0; $i < count($partite); $i++) {
    ?>
        <li>
            <?php
            echo "{$partite[$i]['home']} - {$partite[$i]['away']} | "
            ?>
            <strong>
                <?php
                echo "{$partite[$i]['homeScore']} - {$partite[$i]['awayScore']}"
                ?>
            </strong>
        </li>
    <?php
    }
    ?>
</ul>

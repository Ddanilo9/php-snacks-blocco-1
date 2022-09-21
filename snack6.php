<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 6</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<?php

$db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
 


 foreach ($db['teachers'] as $value) {
?>
    <div class="gray" style="background-color:gray; padding: 10px 15px">
        <?=
        "{$value['name']} {$value['lastname']}";
        ?>
    </div>
    <?php
    }
    ?>

    <?php
    foreach ($db['pm'] as $value) {
    ?>
        <div class="green" style="background-color:green; padding: 10px 15px">
            <?=
            "{$value['name']} {$value['lastname']}";
            ?>
        </div>
    <?php
    }
    ?>

</body>

</html>
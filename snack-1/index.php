<?php
    $games = [
        [
            'home_team' => 'Sardegna',
            'away_team' => 'Trentino',
            'home_score' => 63,
            'away_score' => 58
        ],
        [
            'home_team' => 'Tortona',
            'away_team' => 'Pistoia',
            'home_score' => 45,
            'away_score' => 46

        ],
        [
            'home_team' => 'Pesaro',
            'away_team' => 'Milano',
            'home_score' => 83,
            'away_score' => 71

        ],
        [
            'home_team' => 'Napoli',
            'away_team' => 'Brescia',
            'home_score' => 50,
            'away_score' => 63
        ],
        [
            'home_team' => 'Brindisi',
            'away_team' => 'Treviso',
            'home_score' => 66,
            'away_score' => 78
        ],
        [
            'home_team' => 'Cremona',
            'away_team' => 'Bologna',
            'home_score' => 38,
            'away_score' => 72
        ]
    ]

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($games as $game){
        $matches = '<h2>'.$game['home_team'].' - '.$game['away_team'].' | '.$game['home_score'].' - '.$game['away_score'].'</h2>';
        echo $matches;
    } ?>
</body>
</html>
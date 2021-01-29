<?php
    $matches = [
        tappa1 => [
            casa => "Reggiana",
            ospite => "Trento",
            punteggioCasa => "83",
            punteggioOspite => "74",
        ],
        tappa2 => [
            casa => "Virtus Bologna",
            ospite => "Brescia",
            punteggioCasa => "89",
            punteggioOspite => "90",
        ],
        tappa3 => [
            casa => "Universio Trento",
            ospite => "Olimpia Milano",
            punteggioCasa => "77",
            punteggioOspite => "82",
        ],
        tappa4 => [
            casa => "VL Pesaro",
            ospite => "Cantù",
            punteggioCasa => "107",
            punteggioOspite => "83",
        ],
        tappa5 => [
            casa => "Venezia",
            ospite => "Cremona",
            punteggioCasa => "88",
            punteggioOspite => "84",
        ],
        tappa6 => [
            casa => "Trieste",
            ospite => "Dinamo Sassari",
            punteggioCasa => "82",
            punteggioOspite => "103",
        ],
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basket</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing: border-box;
        }
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-size: 1.5em;
        }
        h2 {
            padding-bottom: 20px;
        }
    </style>
</head>
<body>
    <h2>Partite e Punteggi</h2>
    <ul>
    <?php
        foreach($matches as $match) {
            $casa = $match['casa'];
            $ospite = $match['ospite'];
            $punteggioCasa = $match['punteggioCasa'];
            $punteggioOspite = $match['punteggioOspite'];
            
            echo "<li> $casa - $ospite | $punteggioCasa - $punteggioOspite </li>";
        };
    ?>
    </ul>
</body>
</html>
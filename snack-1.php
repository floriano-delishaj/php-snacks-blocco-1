<?php

$partite = [
    [
        "casa" => [
            "nome" => "Olimpia Milano",
            "punti" => 55
        ],
        "ospiti" => [
            "nome" => "Cantù",
            "punti" => 60
        ]
    ],
    [
        "casa" => [
            "nome" => "Warriors",
            "punti" => 117
        ],
        "ospiti" => [
            "nome" => "Lakers",
            "punti" => 115
        ]
    ],
    [
        "casa" => [
            "nome" => "Chicago Bulls",
            "punti" => 120
        ],
        "ospiti" => [
            "nome" => "Spurs",
            "punti" => 109
        ]
    ],
    [
        "casa" => [
            "nome" => "Wizards",
            "punti" => 103
        ],
        "ospiti" => [
            "nome" => "Pistons",
            "punti" => 94
        ]
    ],
];

echo "<ul>";

for ($i = 0; $i < count($partite); $i++) {
    $nomeCasa = $partite[$i]["casa"]["nome"];
    $puntiCasa = $partite[$i]["casa"]["punti"];
    $nomeOspiti = $partite[$i]["ospiti"]["nome"];
    $puntiOspiti = $partite[$i]["ospiti"]["punti"];

    echo "<li> $nomeCasa - $nomeOspiti | $puntiCasa - $puntiOspiti</li>";
}

echo "</ul>";

?>

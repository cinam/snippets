<?php

$players = [
    [
        'name' => 'Alice',
        'score' => 15,
    ],
    [
        'name' => 'Brett',
        'score' => 12,
    ],
    [
        'name' => 'Cindy',
        'score' => 25,
    ],
    [
        'name' => 'Dylan',
        'score' => 20,
    ],
];

usort($players, function(array $player1, array $player2) {
    return $player2['score'] <=> $player1['score'];
});

echo 'STANDINGS:' . PHP_EOL;
foreach ($players as $player) {
    echo sprintf('%s: %d', $player['name'], $player['score']) . PHP_EOL;
}


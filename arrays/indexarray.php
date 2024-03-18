<?php
//index array
$team = ['John', 'Jane', 'Doe', 'Smith'];
foreach ($team as $member) {
    echo "Hello, $member\n";
}

// associative array
$team=[

    'csk'=>'dhoni',
    'mi'=>'rohit',
    'rcb'=>'kohli',
];

foreach($team as $players=>$captain){
    echo "The captain of $players is $captain\n";
}
// multi-dimensional array


$team = [
    'csk' => ['dhoni', 'jadeja', 'raina'],
    'mi' => ['rohit', 'pollard', 'bumrah'],
    'rcb' => ['kohli', 'abd', 'chahal'],
];
$studenst=[

    ['name'=>'john','age'=>25],
    ['name'=>'jane','age'=>24],
    ['name'=>'doe','age'=>26],
    ['name'=>'smith','age'=>27]
];
foreach ($team as $teamName => $players) {
    echo "The players of $teamName are: " . implode(', ', $players) . "\n";
}

?>
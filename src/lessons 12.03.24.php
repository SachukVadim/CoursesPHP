<!--сколько кирпечей нужно для стены-->


<?php

//function calculateBricksInWall(array $brick, array $wall) : float | int
//{
//    $brickVolume = $brick["height"]  * $brick["length"]  * $brick["width"];
//    $wallVolume = $wall["height"]  * $wall["length"]  * $wall["width"];
//    return $wallVolume / $brickVolume;
//
//
//}
//$brick = [
//        "height" => 10,
//    "length" => 10,
//    "width" => 10,
//    ];
//$wall = [
//    "height" => 100,
//    "length" => 100,
//    "width" => 100,
//];
//
//
//var_dump(calculateBricksInWall($brick,$wall));

$rooms = [
        'room1',
    'room2',
    'room3',
    'room4',
    'room5',
];

function getTrafByDevice(string $device) : int
{
    $traf = [
        'device1' => 50,
        'device2' => 100,
        'device3' => 150,
        'device4' => 200,
        'device5' => 250,
        'device6' => 300,
        'device7' => 350,
        'device8' => 400,
        'device9' => 450,
        'device10' => 500,
    ];

    if (isset($traf[$device])) {
        $traf = $traf[$device];
} else {
 $traf = 0;
    }

    return  $traf;

}
function getPowerByDevice(string $device) : int
{
    $power = [
        'device1' => 5,
        'device2' => 10,
        'device3' => 15,
        'device4' => 20,
        'device5' => 25,
        'device6' => 30,
        'device7' => 35,
        'device8' => 40,
        'device9' => 45,
        'device10' => 50,
    ];

    if (isset($power[$device])) {
        $power = $power[$device];
    } else {
        $power = 0;
    }

    return  $power;
}

function getRessByRoom(string $room) : void
{
    $power = 0;
    $traf = 0;
    $devices = [
        'device1' => 'room1',
        'device2' => 'room1',
        'device3' => 'room2',
        'device4' => 'room2',
        'device5' => 'room3',
        'device6' => 'room3',
        'device7' => 'room4',
        'device8' => 'room4',
        'device9' => 'room5',
        'device10' => 'room5',
        ];
    foreach ($devices as $key => $value) {
        if ($value === $room) {
            $power += getPowerByDevice($key);
            $traf += getTrafByDevice($key);

        }
    }

    echo 'Energy in room ' . $room . ':' . $power . "<br>";
    echo 'Traff in room ' . $room . ':' . $traf . "<br>";
}

foreach ($rooms as $room) {
    getRessByRoom($room);
}
?>
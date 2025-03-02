<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zombie Infection Status</title>
</head>
<body>
  <h1>Zombie Infection Status</h1>

</body>
</html>

<?php
$people = [
  [ "Bob", 15402 ], 
  [ "Patrice", 73401 ],
  [ "Sarah", 42072 ], 
  [ "Hawkeye", 40771 ],
  [ "Hrothgar", 72315 ], 
  [ "Pierce", 40772 ],
  [ "Leroy", 114222 ], 
  [ "The Ghost", 100000 ],
  [ "Antonio", 54023 ], 
  [ "John", 10113 ],
  [ "Jessica", 87623 ], 
  [ "Unicorn Harry", 99851 ],
  [ "Professor Blusterhiny", 861943 ],
  [ "President Schlock", 21530 ], 
  [ "Jamal", 51047 ], 
  [ "Sam", 74351 ], 
  [ "Lovely Ivan", 20451 ],
  [ "Colonel Saunders", 99782 ], 
  [ "Nobody", 77777 ], 
  [ "Captain Clean", 88721 ], 
  [ "Zombs B. Dead", 102567 ], 
  [ "Jenny", 8675309 ], 
  [ "Laura", 99967 ],
  [ "Cletus", 15402 ],
  [ "J4me5 the Hacker", 1337 ]
];

//Loop?
for ($i = 0; $i < count($people); $i++){
    processPerson($people[$i][0], $people[$i][1]);
}

    
function processPerson( $name, $NBT ) {
   $becomeZombie = willBecomeZombie($NBT);
   $infectionRate = infectionRateCalculation( $NBT );
   $curability = curable($NBT);
   outputInfo($name, $becomeZombie, $infectionRate, $curability);
}


function willBecomeZombie( $NBT ) {
    // will return true or false
    if (($NBT % 7) >= 2) {
        return "Zombie!";
    } else {
        return "Still Human";
    }
}


function infectionRateCalculation( $NBT ) {
    return ($NBT / 19307) * 0.1257;
}

function curable( $NBT ) {
    
    $result = ($NBT *(3+2) % 17);
    
    if ($result === 0 || $result === 7) {
        return "Curable!";
    } else {
        return "Doomed!";
    }
    
}

function outputInfo( $name, $becomeZombie, $infectionRate, $curability ) {
    echo "<section>"
    echo "<p style='font-weight:bold;'> Name: " . $name . "</p>";
    echo "<p>Status: " . $becomeZombie . "<p>";
    echo "<p>Infection Rate: " . $infectionRate . "</p>";
    echo "<p style='font-weight:bold;>Curability: " . $curability . "</p";
    echo "</section>";
  
}
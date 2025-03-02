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
  echo "Name: " . $name . " ";
  echo "NBT: ". $NBT;
  echo " | ";
}

function willBecomeZombie( $NBT ) {
  
}

function infectionRateCalculation( $NBT ) {
  
}

function curable( $NBT ) {
  
}

function outputInfo( $name, $becomeZombie, $infectionRate, $curability ) {
  
}
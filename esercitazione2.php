<?php
//TRACCIA 1

$users = [
    ['name' => 'Davide', 
    'surname' => 'Cariola', 
    'gender' => 'male'
    ],
    ['name' => 'Ludovica',
    'surname' => 'Rossi',
    'gender' => 'female'
    ],
    ['name' => 'Fausto',
    'surname' => 'Biondi',
    'gender' => 'male'
    ],
    ['name' => 'Jennifer',
    'surname' => 'Aniston',
    'gender' => 'female'
    ],
];

for ($i=0; $i < count($users); $i++){
    if($users[$i]['gender'] === 'male'){
        echo 'Buongiorno Sig. ' . $users[$i]['name'] . " " . $users[$i]['surname'] . "\n";
    } else {
        echo 'Buongiorno Sig.ra ' . $users[$i]['name'] . " " . $users[$i]['surname'] . "\n";
}
};

   
//TRACCIA 2

$array = [1,2,3,4,5,6,7,8];
$sommaNumeriPari = 0;
$numeriPari = 0;

for($i=0; $i < count($array); $i++){
    if($array[$i] % 2 === 0){
        $sommaNumeriPari += $array[$i];
        $numeriPari++;
    };
};
if ($numeriPari >0){
    $mediaNumeriPari = $sommaNumeriPari / $numeriPari;
    echo "La media dei numeri pari è " . $mediaNumeriPari;
}

//TRACCIA 3

$i = 0;

while ($i <=100){
    
    if($i %3 === 0 && $i %5 ===0){
        echo "HACKADEMY" . "\n";
    } else if($i %5 === 0){
        echo "JAVASCRIPT" . "\n";
    } else if($i %3 === 0 ){
        echo "PHP" . "\n";
    } else {
        echo $i . "\n";
    }
    $i++;
};





<?php

$numbers = array(1, 2, 3, 4, 5, 6, 7, 8);
$length = count($numbers);
echo "Length of the array: $length";

echo '</br>';

$numbers = array(1, 2, 3, 4, 5, 7, 8, 9, 12, 14, 22, 44);
$sum = array_sum($numbers);
echo "Sum of array elements: $sum";
echo '</br>';

$fruits = array("apple", "banana", "orange");
$reversed = array_reverse($fruits);
echo '<pre>';
print_r($reversed);
echo '</pre>';

$fruits = array("apple", "banana", "orange", "apple", "banana", "apple");
$fruitCount = array_count_values($fruits);
echo '<pre>';
print_r($fruitCount);
echo '</pre>';

$jsonString = '{
    "Title": "The Cuckoo\'s Calling",
    "Author": "Robert Galbraith",
    "Detail": {
        "Publisher": "Little Brown"
    }
}';

$decodedData = json_decode($jsonString, true);
echo '<pre>';
print_r($decodedData);
echo '</pre>';

foreach ($decodedData as $key => $value) {
    if (is_array($value)) {

        foreach ($value as $subKey => $subValue) {
            echo "$subKey : $subValue" . '</br>';
        }

    } else {
        echo "$key : $value" . '</br>';
    }

}

$colors = array("red", "green", "blue");
$searchColor = "green";
if (in_array($searchColor, $colors)) {
    echo "$searchColor exists in the array.";
} else {
    echo "$searchColor does not exist in the array.";
}

$numbers = array(1, 2, 3, 2, 4, 5, 3, 1, 8, 9);
$uniqueNumbers = array_unique($numbers);
echo '<pre>';
print_r($uniqueNumbers);
echo '</pre>';

$numbers = array(3, 8, 2, 6, 1, 9);
$maxValue = max($numbers);
$minValue = min($numbers);
echo "Max value: $maxValue, Min value: $minValue";
echo '</br>';

$numbers = array(1, 2, 3, 4, 5);
$subset = array_slice($numbers, 2, 2);
echo '<pre>';
print_r($subset);
echo '</pre>';

$array1 = array(1, 2, 3, 4, 5);
$array2 = array(3, 4, 5, 6, 7);
$intersection = array_intersect($array1, $array2);
echo '<pre>';
print_r($intersection);
echo '</pre>';


$keys = array("name", "age", "city");
$values = array("John", 30, "New York");
$combined = array_combine($keys, $values);
echo '<pre>';
print_r($combined);
echo '</pre>';


$jsonData = '{
    "squadName": "Super hero squad",
    "homeTown": "Metro City",
    "formed": 2016,
    "secretBase": "Super tower",
    "active": false,
    "members": [
      {
        "name": "Molecule Man",
        "age": 29,
        "secretIdentity": "Dan Jukes",
        "powers": ["Radiation resistance", "Turning tiny", "Radiation blast"]
      },
      {
        "name": "Madame Uppercut",
        "age": 39,
        "secretIdentity": "Jane Wilson",
        "powers": [
          "Million tonne punch",
          "Damage resistance",
          "Superhuman reflexes"
        ]
      },
      {
        "name": "Eternal Flame",
        "age": 1000000,
        "secretIdentity": "Unknown",
        "powers": [
          "Immortality",
          "Heat Immunity",
          "Inferno",
          "Teleportation",
          "Interdimensional travel"
        ]
      }
    ]
  }';



$decodedDataArray = json_decode($jsonData, true);
// echo '<pre>';
// print_r($decodedDataArray);
// echo '</pre>';


echo "Squad Name: " . $decodedDataArray['squadName'] . "</br>";
echo "Home Town: " . $decodedDataArray['homeTown'] . "</br>";
echo "Formed: " . $decodedDataArray['formed'] . "</br>";
echo "Secret Base: " . $decodedDataArray['secretBase'] . "</br>";
echo "Active: " . ($decodedDataArray['active'] ? 'Yes' : 'No') . "</br>";


foreach ($decodedDataArray['members'] as $member ){
   echo '<br>'; 
   echo 'Member Name'.' : '. $member['name'].'</br>';
   echo 'Member age'.' : '. $member['age'].'</br>';
   echo 'Member secretIdentity'.' : '. $member['secretIdentity'].'</br>';
   echo  'Powers : '.implode(', ',$member['powers'])."<br>";
   
}


echo "<br>";

$uniqueArray = array(1, 2, 3, 4, 5);
$isUnique = count($uniqueArray) == count(array_unique($uniqueArray));
echo $isUnique ? "The array contains only unique values." : "The array contains duplicate values.";
echo "<br>";


$numbers = array(8, 2, 5, 10, 3);
$maxIndex = array_search(max($numbers),$numbers);
echo "Index of the maximum value : $maxIndex";
echo "<br>";


$emptyArray = array(2,4,6);
if (empty($emptyArray)) {
    echo "The array is empty.";
} else {
    echo "The array is not empty.";
}

echo "<br>";
$array1 = array(1, 2, 3);
$array2 = array(3, 4, 5);
$result = array_unique(array_merge($array1, $array2));



 echo '<pre>';
 print_r($result);
 echo '</pre>';

echo "<br>";


echo 'Combine two arrays';
 
$array1 = array("a", "b", "c");
$array2 = array(1, 2, 3);
$result = array();

foreach($array1 as $key => $value){
	$result[] = $value;
	$result[] = $array2[$key];
	
}

 echo '<pre>';
 print_r($result);
 echo '</pre>';
 
 
echo 'Average value of an array';
$numbers = array(10, 20, 30, 40, 50);
$average = array_sum($numbers) / count($numbers);
echo "The average is: $average";

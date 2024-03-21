<?php

$numbers = array(1, 2, 3, 4, 5, 6, 7, 8);
$length = count($numbers);
echo "Length of the array: $length";

echo '</br>';

$numbers1 = array(1, 2, 3, 4, 5, 7, 8, 9, 12, 14, 22, 44);
$sum = array_sum($numbers1);
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
    echo  'Powers : '.implode(', ', $member['powers'])."<br>";
   
}


echo "<br>";

$uniqueArray = array(1, 2, 3, 4, 5);
$isUnique = count($uniqueArray) == count(array_unique($uniqueArray));
echo $isUnique ? "The array contains only unique values." : "The array contains duplicate values.";
echo "<br>";


$numbers = array(8, 2, 5, 10, 3);
$maxIndex = array_search(max($numbers), $numbers);
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

foreach ($array1 as $key => $value){
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

echo "<br>";

$a = ['56', '66', '', '58', '85', '', '', '76', '', '57'];
$a = array_filter($a);

if (count($a)) {
    $average = array_sum($a)/count($a);
    echo "The average (excluding empty values) is approximately: " . $average;
} else {
    echo "No valid values to calculate the average.";
}



echo "<br>";


$array1 = array(1, 2, 3);
$array2 = array(3, 4, 5);
$result = array_unique(array_merge($array1, $array2));
 echo '<pre>';
 print_r($result);
 echo '</pre>';



echo "Count the occurrences of each element in an array";


$numbers = array(1, 2, 2, 3, 3, 3, 4, 4, 4, 4);
$occurences = array_count_values($numbers);
echo '<pre>';
print_r($occurences);
echo '</pre>';


$numbers12 = array(1, 2, 2, 3, 3, 3, 4, 4, 4, 4);
echo sizeof($numbers12);


$colors = array("Red", "Green", "Blue");
$htmlList = '<ul><li>' .implode('</li><li>', $colors).'</li></ul>';
echo $htmlList;


echo 'Combine two associative arrays, preserving keys';

$array1 = array("a" => 1, "b" => 2);
$array2 = array("b" => 3, "c" => 4);
$result = $array1 + $array2;
echo '<pre>';
print_r($result);
echo '</pre>';


echo'Flip the keys and values of an associative array';


$colors = array(
    "red" => "apple", 
    "green" => "lime", 
    "blue" => "blueberry"
);
echo '<pre>';
print_r($colors);
echo '</pre>';


$flippedArray = array_flip($colors);
echo '<pre>';
print_r($flippedArray);
echo '</pre>';


echo "Search for a value in an array and return the corresponding key"."<br>";

$fruits = array("Apple"=>4,"Cherry"=>5,"Banana"=>7);
$searchValue = 4;
$key = array_search($searchValue, $fruits);
echo "The key for value $searchValue is: $key";


echo "Extract a slice of an array";

$fruits = array("apple", "banana", "cherry", "date", "elderberry");


echo "Find the keys of the top N largest values in an array";


$numbers = array(4, 2, 8, 6, 10, 1);
$topN = 3;
arsort($numbers);
$topKeys = array_slice(array_keys($numbers), 0, $topN);
echo '<pre>';
print_r($topKeys);
echo '</pre>';

echo "Find the difference between two arrays, ignoring keys";

$array1 = array("a" => 1, "b" => 2, "c" => 3);
$array2 = array(1, 2, 4);
$difference = array_diff($array1, $array2);
echo '<pre>';
print_r($difference);
echo '</pre>';



echo "Combine two arrays into an associative array";

$keys = array("a", "b", "c");
$values = array(1, 2, 3);

$combinedArray = array_combine($keys, $values);

echo '<pre>';
print_r($combinedArray);
echo '</pre>';


$letters = range('A', 'Z');
echo '<pre>';
print_r($letters);
echo '</pre>';


echo "Problem 82: Get the first element of an array";

$arrayList = [90,20,50,30,60,70];
$firstElement = end($arrayList);
echo '<pre>';
print_r($firstElement);
echo '</pre>';


echo "Problem 89: Remove the first element from an array";
$array = array(10, 20, 30, 40, 50);
array_shift($array);
print_r($array);




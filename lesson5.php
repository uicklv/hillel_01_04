<?php
//$array1 = array();
//$array = [1, 5.2, false, null, []];
//$array = ['key1' => 'elem1', 'key2' => 'elem2',
//    'key3' => 'elem3', 'key4' => 'elem4', 'key5' => 'elem5', 'elem6'];

//$array = ['elem1', 'elem2', 'elem3', 'elem4', 'elem5'];

//$array[] = 'elem6';
//$array[10] = 'elem6';
//$array[10] = 'elem6';
//$array[11] = 'elem7';

//unset($array[10]);

//var_dump($array[1]);
//
//$assocArray = ['name' => 'Jim', 'age' => 25, 'location' => 'Odesa'];
//$assocArray['position'] = 'Developer';
//$assocArray[] = 'test string';
//echo $assocArray['name'] . PHP_EOL;
//var_dump($assocArray);
//
//$multiArray = ['name' => 'Jim', 'age' => 25, 'location' => [
//    'country' => 'Ukraine',
//    'city' => 'Odesa',
//    'coords' => [
//        'lang' => -53,
//        'lat' => 15
//    ]
//]];
//echo $multiArray['location']['coords']['lang'] . PHP_EOL;
//
//$multiArray = [
//    'name' => [
//        'firstname' => 'Jim',
//        'lastname' => 'Anderson',
//    ],
//    'age' => 25,
//    'location' => [
//        'country' => 'Ukraine',
//        'city' => 'Odesa',
//    ]
//];

//$array = [10.9 => 2, 10 => 1, true => 3, null => 4, 5];
//
//var_dump($array);

//$array1 = [1, 3, 2];
//$array2 = [1, 2, 3];
//
//var_dump($array1 + $array2);

//$i = 1;
//$sum = 0;
//while ($i <= 10) {
//    $sum += $i;
//    $i++;
//}
//
//echo $sum . PHP_EOL;


//$i = 1;
//while (false) {
//    echo $i . PHP_EOL;
//    $i++;
//}

//do {
//    echo $i . PHP_EOL;
//    $i++;
//} while (false);

//$array = ['elem1', 'elem2', 'elem3'];
//
//foreach ($array as $k => $v) {
//    $array[$k] = 'test';
//}
//
//var_dump($array);

//var_dump($array);

//for ($i = 1, $j = 2;  $i <= 10, $j <= 4; $i++, $j += 2) {
//    echo $i . PHP_EOL;
//    echo "-------" . PHP_EOL;
//    echo $j . PHP_EOL;
//    echo "-------" . PHP_EOL;
//}

//$array = [1, 2, 3, 4, 5];
//$length = count($array);
//for ($i = 0;  $i < $length; $i++) {
//   echo $array[$i] . PHP_EOL;
//}

//$array = [1, 4, 1, 3, 55, 6, 7, 11, 9, 10];
//
////$result = [];
////foreach ($array as $value) {
////    if ($value === 6) {
////        break;
////    }
////    $result[] = $value;
////}
//
//$result = [];
//foreach ($array as $value) {
////    if ($value % 2 !== 0) {
////        continue;
////    }
////    $result[] = $value;
//
//    if ($value % 2 === 0) {
//        $result[] = $value;
//    }
//}

//var_dump($result);

//
//$vacancies = [
//  ['title' => 'PHP Developer', 'salary' => 2000, 'location_id' => 1, 'sector_id' => 1],
//  ['title' => 'JS Developer', 'salary' => 2500, 'location_id' => 2, 'sector_id' => 1],
//  ['title' => 'Finance Manager', 'salary' => 3000, 'location_id' => 3, 'sector_id' => 2],
//];
//
//$locations = [
//    ['id' => 1, 'name' => 'Odesa'],
//    ['id' => 2, 'name' => 'Lviv'],
//];
//
//$sectors = [
//    ['id' => 1, 'name' => 'IT'],
//    ['id' => 2, 'name' => 'Finance'],
//];
//
//foreach ($vacancies as $key => $vacancy) {
//    $locationId = $vacancy['location_id'];
//    $vacancies[$key]['location'] = '';
//    foreach ($locations as $location) {
//        if ($location['id'] === $locationId) {
//            $vacancies[$key]['location'] = $location['name'];
//            break;
//        }
//    }
//
//    $sectorId = $vacancy['sector_id'];
//    $vacancies[$key]['sector'] = '';
//    foreach ($sectors as $sector) {
//        if ($sector['id'] === $sectorId) {
//            $vacancies[$key]['sector'] = $sector['name'];
//            break;
//        }
//    }
//}
//
//var_dump($vacancies);

//function generateArray(int $length = 10, int $min = 1, int $max = 10): array
//{
//    $array = [];
//    for ($i = 0; $i < $length; $i++) {
//        $array[] = rand($min, $max);
//    }
//
//    return $array;
//}
//
//$myArray = generateArray();
//
//var_dump($myArray);

//$names = ['Jim', 'Kate', 'Mike'];
//$string = '';
//foreach ($names as $name) {
//    $string .= $name . ',';
//}
//$string = rtrim($string, ',');
//echo $string . PHP_EOL;

//$names = ['Jim', 'Kate', 'Mike'];
//$namesString = join(', ', $names);
//$array = explode(', ', $namesString);
//var_dump($array);

$array = ['test', 5, 'cba', 'ba', 1, 3];

//sort($array);
//rsort($array);
//arsort($array);
//asort($array);
//ksort($array);
sort($array);

print_r($array);
<?php

//$array = [
//    ['id' => 1, 'name' => 'Abc'],
//    ['id' => 10, 'name' => 'Jam'],
//    ['id' => 3 , 'name' => 'Bit'],
//    ['id' => 5, 'name' => 'Cab']
//];

//$array = [
//    [1, 'name' => 'Abc'],
//    [10, 'name' => 'Jam'],
//    [3 , 'name' => 'Bit'],
//    [5, 'name' => 'Cab']
//];

//$callback = function (array $a, array $b) {
//    return $b['id'] <=> $a['id'];
//};
//
//usort($array, fn($a, $b) => $b['id'] <=> $a['id']);
//
//usort($array, fn($a, $b) => strcmp($a['name'], $b['name']));
//
//
//print_r($array);

//$ids = [];
//foreach ($array as $item) {
//    $ids[] = $item['id'];
//}

//$ids = array_column($array, 'id');
//
//print_r($ids);

//$numbers = [1,2,3,4,5,6,7,8,9];
//$sum = array_sum($numbers);
//$product = array_product($numbers);
//echo $sum . PHP_EOL;
//echo $product . PHP_EOL;

//$array = ['key1' => 'value1', 'key2' => 'value2', 'key3' => 'value3'];
//
//$keys = array_keys($array);
//$values = array_values($array);
//
//$combine = array_combine($keys, $values);
//print_r($combine);

//$array = array_flip($array);
//print_r($array);
//
//foreach ($array as $key => $value) {
////    if (array_key_first($array) === $key) {
////        echo 'First item:' . $value . PHP_EOL;
////        break;
////    }
//
//    if (array_key_last($array) === $key) {
//        echo 'Last item:' . $value . PHP_EOL;
//        break;
//    }
//}

//$result = [200, 'OK', '18.04.2024 19:49'];

//$status = $result[0];
//$message = $result[1];
//$date = $result[2];

//list($status, $message, $date) = $result;
//[$status, $message, $date] = $result;
//
//echo $status . PHP_EOL;
//echo $message . PHP_EOL;
//echo $date . PHP_EOL;

//$array = ['name' => 'Jim', 'age' => 20];
////$name = $array['name'];
////$age = $array['age'];
//extract($array);
//echo "$name $age \n";

//$name = 'Jim';
//$age = 20;
//$array = compact('name', 'age');
//
//print_r($array);

//$array = [1, -2, false, -4, 5 , -6];
//$array = ',Jim,Mike,';
//$array = explode(',', $array);
////$positive = array_filter($array, fn($number) => $number % 3 === 0);
//$positive = array_filter($array);
//print_r($positive);

//$array = [1, -2, false, -4, 'key' => 5 , -6, 5, 5];
//$array = array_unique($array);
//print_r($array);
//echo array_search('5', $array, true) . PHP_EOL;
//$array = ['Lviv', 'Kyiv', 'Odesa'];
//$array = [1,2,3,4];
//
////$array = array_map('strtoupper', $array);
////$array = array_map(fn($number) => $number ** 2, $array);
//
//array_walk($array, function (&$value) {
//    $value **=2;
//});
//print_r($array);

//$array1 = [1, 2, 3];
//$array2 = [4, 5, 6];
//
//$array = array_merge($array1, $array2);
//
//$newArray = array_slice($array, 2, 2);
//print_r($newArray);

//$array = [1,2,3,4,5,6,7,8,9];
//$array[] = 10;
//array_push($array, 11, 12, 13, 14);
//
////print_r($array);
//
//if (in_array('10', $array)) {
//    echo "Hello \n";
//}

//$array = [1,2,4,5,6,7];
//foreach ($array as $value) {
//    echo $value;
//}
//function generatorArray(int $length = 10, int $min = 1, int $max = 10): array
//{
//    $array = [];
//    for ($i = 0; $i < $length; $i++) {
//        $array[] = rand($min, $max);
//    }
//    return $array;
//}
//
//$array = generatorArray();

//foreach ($array as $value) {
//    echo $value . PHP_EOL;
//}

//function generator(): Generator
//{
////    for ($i = 0; $i < $length; $i++) {
////        yield rand($min, $max);
////    }
//    yield 5;
//    yield 6;
//    yield 7;
//    yield 8;
//}
//
//$generator = generator();
//
//foreach ($generator as $value) {
//    echo $value . PHP_EOL;
//}

//function myTest(): Generator
//{
////    yield from [5,6,7,8,9];
//    yield 5;
//    yield 6;
//    yield 7;
//    yield 8;
//    yield 9;
//}
//
//foreach (myTest() as $value) {
//    echo $value . PHP_EOL;
//}

//function generator(int $start, int $end): Generator
//{
//    for ($i = $start; $i <= $end; $i++) {
//        yield $i;
//    }
//}


//$start = memory_get_usage();
//$numbers = range(1, 60000);
//$end = memory_get_usage();
//
//echo $end - $start . PHP_EOL;

//$start = memory_get_usage();
//$numbers = generator(1, 60000);
//$end = memory_get_usage();
//
//echo $end - $start . PHP_EOL;

//function nums(): Generator
//{
//    for ($i = 0; $i < 10; $i++) {
//        $cmd = (yield $i);
//        if ($cmd === 'stop') {
//            return;
//        }
//    }
//}
//
//$generator = nums();
//foreach ($generator as $value) {
//     if ($value === 3) {
//         $generator->send('stop');
//     }
//     echo $value . PHP_EOL;
//}
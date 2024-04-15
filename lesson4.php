<?php
declare(strict_types=1);

//if (true) {
//    function sayHello()
//    {
//        echo "Hello World. How are you ?" . PHP_EOL;
//    }
//}

//$a = 5;
//function sayHello($name)
//{
//    echo "Hello $name" . PHP_EOL;
//}
//
//$myName = 'john';
//sayHello($myName);
//
//sayHello('mike');
//
//$newName = 'Kate';
//sayHello($newName);


//echo $myName . PHP_EOL;

//function calculate($number, $number2)
//{
//    echo $number * $number2 . PHP_EOL;
//}
//
//calculate(5,1);
//calculate(3,2);
//calculate(4,7);


//function showMessage($message = 'Hello World', $secondMessage = null) {
//    echo $message . PHP_EOL;
//    if (null !== $secondMessage) {
//        echo $secondMessage . PHP_EOL;
//    }
//}

//$secondMessage = 5;
//if (null !== $secondMessage) {
//    echo $secondMessage . PHP_EOL;
//}

//showMessage();
//showMessage('Hello John');

//function showMessage($message)
//{
//    echo $message . PHP_EOL;
//}
//function power($number, $power = 2)
//{
//    if (!is_numeric($number) || !is_numeric($power)) {
//        return false;
//    }
//
//    return $number ** $power;
//}
//
//
//
//$powerResult = power('test');
//
//if (false === $powerResult) {
//    showMessage('Error in power function');
//}
//
//var_dump($powerResult);

//echo $powerResult . PHP_EOL;

//function power($number, $power = 2)
//{
//    return $number ** $power;
//}
//
//function power2(&$number, $power = 2)
//{
//    $number = $number ** $power;
//}
//
//
//$b = 2;
//$a = &$b;
//
//$myNumber = 5;
////$myNumber = power($myNumber);
//power2($myNumber);
//
//
//echo $myNumber . PHP_EOL;

//function calculate(int|float $number, int $power = 2): void
//{
//    echo $number ** $power;
//}
//
//$function = 'calculate';
//
//$function(5);

//
//
//calculate(5);

//function search(?string $keywords = null, ?string $location = null, ?string $sector = null, ?string $salary = null)
//{
//    if (null !== $keywords) {
//
//    }
//
//    if (null !== $location) {
//
//    }
//
//    if (null !== $sector) {
//
//    }
//
//    if (null !== $salary) {
//
//    }
//
//    return true;
//}
//
//echo search(salary: '9500$', keywords: 'keywords');

//$function = function (int $number, int $power = 2): int|float {
//    return $number * $power;
//};

//var_dump($function);

//echo $function(5) . PHP_EOL;


function filter(string $text, ?closure $callback = null): string
{
    if (null !== $callback) {
        return $callback($text);
    }
    return $text;
}
//
//$text = '     Text. hello world.              ';
//$function = function (string $text) {
//    return str_replace('.', '!', $text);
//};
////$text = filter($text, 'trim');
//$text = filter($text, $function);
//
//echo $text . PHP_EOL;


//$a = 5;
//
//test(1);
//function test(int $number): int
//{
//    global $a;
//    $a = ++$a;
//    echo $a . PHP_EOL;
//    return $number + 1;
//}
//
//echo $a . PHP_EOL;


//$function  = function (int $a, int $b) use ($c) : int {
//    $c = ++$c;
//    echo $c;
//    return $a + $b;
//};
//
//$function(1, 2);

$c = 5;
$function = fn (int $a, int $b) => $a + $b + $c;

echo $function(1,2);


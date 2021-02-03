<?php

require __DIR__ . '/vendor/autoload.php';

use Amp\Parallel\Worker;
use Amp\Promise;

$start_time = microtime(true); 

$multiplications = [
	[23, 11],
	[12, 43],
	[64, 92],
	[84, 67],
	[95, 52],
];

$results = [];
foreach ($multiplications as $integers) {
    $results[] = multiplication($integers[0], $integers[1]);
}

echo "input:" . PHP_EOL . PHP_EOL;
var_dump($multiplications);

echo PHP_EOL . PHP_EOL;

echo "ouput:" . PHP_EOL . PHP_EOL;
var_dump($results);

echo PHP_EOL . PHP_EOL;

$end_time = microtime(true);
$execution_time = number_format($end_time - $start_time, 2); 
echo "Execution time of script = " . $execution_time ." sec" . PHP_EOL;
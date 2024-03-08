<?php

$items = [
 ['Shoes' => 'Widget A', 'price' => 30],
 ['Laptop' => 'Widget B', 'price' => 25000],
 ['Drawer' => 'Widget C', 'price' => 79000],
];
$total = 0;
foreach ($items as $item) {
 $total += $item['price'];
}
echo "Total price: $" . $total;

$string = "This \n is \n a \n poorly \n written \n program \n with \n little\nstructure \n and \nreadability.";


$string = str_replace(' ', '', $string);
$string = strtolower($string);

echo "\nModified string: " . $string;

$number = 101;
if ($number % 2 == 0) {
 echo "\nThe number " . $number . " is even.";
} else {
 echo "\nThe number " . $number . " is odd.";
}
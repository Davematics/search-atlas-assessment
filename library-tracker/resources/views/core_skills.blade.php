<?php
$array = [];
$random_numbers= [];

for($i = 0; $i < 10; $i++){
    $random_numbers[] =rand(1,20);
}

$filtered = array_filter($random_numbers, function($number){
    return $number < 10;

});

echo "original array: ";
print_r(array_values($random_numbers));
echo "<br>";
echo "\nFiltered Array (numbers < 10): ";
print_r(array_values($filtered));


?>

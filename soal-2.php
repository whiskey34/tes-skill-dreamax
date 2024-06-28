<!-- soal no.2 -->

<?php 
function sortNum(array $arr): array {
    $n = count($arr);

    for ($i = 0; $i < $n; $i++) {
        for($j = 0; $j < $n - $i - 1; $j++) {
            if($arr[$j] > $arr[$j + 1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }

    return $arr;
} 

$array = [9, 3, 7, 8, 2, 6, 1, 4, 10, 2, 2, 3];
$sortedArray = sortNum($array);

echo "Sorted array: ";
foreach ($sortedArray as $value) {
    echo $value . " ";
}


?>
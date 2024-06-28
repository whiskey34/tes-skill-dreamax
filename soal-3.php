<!-- soal No.3 -->

<?php 
function counterPay(string $itemType, int $quantity, string $dayOfWeek): float {
    $priceA = 99900;
    $priceB = 49900;

    $totalPrice = 0;

    if($itemType === 'A') {
        $totalPrice = $priceA * $quantity;

        if($quantity > 50) {
            $totalPrice *= 0.95;
        }

        if ($dayOfWeek === 'Monday' || $dayOfWeek === 'thursday')
    }
}

?>
<!-- На вход подается строка из чисел, разделенных пробелами.
Найдите максимальное произведение двух чисел из этой строки. -->

<?php

function maxTwoInteger ($strNums) {
	$arrNums = explode (" ", $strNums);
	$productNums = [];
	foreach ($arrNums as $thisKey => $thisValue) {
		foreach ($arrNums as $twoKey => $twoValue) {
			if (($thisKey === 0 && $twoKey === 0) || ($thisKey === $twoKey)) {
				continue;
			}
			else {
				$productNums[] = $thisValue * $twoValue;
			}
		}
	}
	$maxProduct = max($productNums);
	return $maxProduct;
}

echo maxTwoInteger("1 2 3 4");
?>
<?php

function format($number, $symbol = '₽')
{
	$formatted_number = number_format($number, 0, '', ' ');
	$result = $formatted_number . ' ' . $symbol;
	return $result;
}
function dateFormat($years, $ot = false)
{
	if ($ot) {

		if ($years == 1) {
			$result = $years . ' годa';
		} elseif ($years >= 2) {
			$result = $years . ' лет';
		}
	} else {
		if ($years == 1) {
			$result = $years . ' год';
		} elseif ($years >= 2 && $years <= 4) {
			$result = $years . ' года';
		} elseif ($years >= 5) {
			$result = $years . ' лет';
		}
	}
	return $result;
}

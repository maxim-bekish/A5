<?php

function format($number, $symbol = '')
{
   $formatted_number = number_format($number, 0, '', ' ');
   $result = $formatted_number . ' ' . $symbol;
   return $result;
}

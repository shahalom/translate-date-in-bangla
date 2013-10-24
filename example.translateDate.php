<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<?php
include_once 'class.translateDate.php';

$tcObj = new TranslateDate();


echo '<br>';
echo $tcObj->get_date("d M, Y");

echo '<br>';
echo $tcObj->get_date("d M, Y", "15 October, 1983");

echo '<br>';
echo $tcObj->get_date("d M, Y", "15-10-1983");

echo '<br>';
echo $tcObj->get_date("d M, Y", "1983-10-15");




echo '<br>';
echo $tcObj->translate("1983-10-15");

echo '<br>';
echo $tcObj->translate("15 October, 1983");





echo '<br>';
echo $tcObj->translate_number("1234567890");

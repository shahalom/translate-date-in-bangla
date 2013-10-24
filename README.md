translate-date-in-bangla
========================

PHP class to translate date in Bangla<br />
@package TranslateDate<br /><br />

Concept & Primary script is collected from http://tareq.wedevs.com/2010/09/translate-wordpress-date-time-comment-number-to-bangla-digit/<br />
@author Shah Alom <shahalom.amin@gmail.com><br /><br /><br />


Example of Use:<br />=====================================<br /><br />

$tcObj = new TranslateDate();<br /><br />

$output = $tcObj->get_date("d M, Y");<br />
or<br />
$output = $tcObj->translate("10 October, 1983");<br /><br />

echo $output;<br />

 

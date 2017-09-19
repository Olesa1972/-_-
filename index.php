<div> 
<?php
$myyear=1997;
$mymonth=10;
$myday=8;
$currentyear=2017;
$currentmonth=9;
$currentday=19;
if  ($currentmonth<$mymonth) {
echo "Дня рождения не было";
$old=$currentyear - $myyear;
echo " ". --$old;
} else {
	echo "День рождения был";
	$old=$currentyear - $myyear;
	echo " ". $old;
}
?>
</div>
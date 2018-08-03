<!DOCTYPE html>
<html>
<body>

<?php  


$GLOBALS['leapyears'] = 0;

for ($year = 1980; $year <= 2018; $year++) {
	if($year % 4 > 0 && $year % 400 > 0)
  echo "$year <br>";
	else
     echo "$year Leap Year<br>";


}

for ($year = 1980; $year <= 2018; $year++) {
	if($year % 4 == 0 && $year % 100 != 0 || $year % 400 == 0)
		$leapyears++;
}
echo "$leapyears Leap Years";
?>  

</body>
</html> 



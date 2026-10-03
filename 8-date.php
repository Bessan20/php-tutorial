<?php

echo date("y-m-d")."\n<br>"; //26-09-23
echo date("y/m/d")."\n<br>"; //26/09/23
echo date("y.m.d")."\n<br>"; //26.09.23
echo date("y&m&d")."\n<br>"; //26.09.23

//difference between Y and y
echo date("Y-m-d")."\n<br>"; //2026-09-23
echo date("Y-m-d H:i:s")."\n<br>"; //2026-09-23

// d - Represents the day of the month (01 to 31)
// j - Represents the day of the month (1 to 31)
// m - Represents a month (01 to 12)
// Y - Represents a year (in four digits)
// l (lowercase 'L') - Represents the day of the week
// F - Represents the month

echo date("l")."\n<br>"; //Wensday
echo date("m")."\n<br>"; //09
echo date("F")."\n<br>";


echo time()."\n<br>";
//echo time("H:i:s")."\n<br>";//expects exactly 0 arguments (will cause an error)
echo date("H:i:s a")

?>
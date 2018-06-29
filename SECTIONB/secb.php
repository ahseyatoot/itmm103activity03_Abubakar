<html>
<head>
<title>SECTION B</title>
</head>
<body>
<h2><center>THIS IS SECTION B</center></h2>
<br>

<p>
<a href="../index.html"><center>Main Page</center><br></a>
<a href="../SECTIONA/seca.php"><center>Section A</center><br></a>
<a href="../SECTIONC/secc.php"><center>Section C</center><br></a>
<a href="../SECTIOND/secd.php"><center>Section D</center><br></a>
<a href="../SECTIONE/sece.php"><center>Section E</center><br></a>
<a href="../SECTIONF/secf.php"><center>Section F</center><br></a>
<a href="../SECTIONG/secg.php"><center>Section G</center><br></a>
<a href="../SECTIONH/sech.php"><center>Section H</center><br></a>
<a href="../SECTIONI/seci.php"><center>Section I</center><br></a>
</p>

<?php
$color = array('white', 'green', 'red', 'blue', 'black');
echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The new president and his first lady. - Richard M. Nixon"."\n";

echo "\n";

$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg",
"Belgium"=> "Brussels", "Denmark"=>"Copenhagen",
"Finland"=>"Helsinki", "France" => "Paris",
"Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana",
"Germany" => "Berlin", "Greece" => "Athens",
"Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
"Portugal"=>"Lisbon", "Spain"=>"Madrid",
"Sweden"=>"Stockholm", "United Kingdom"=>"London",
"Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius",
"Czech Republic"=>"Prague", "Estonia"=>"Tallin",
"Hungary"=>"Budapest", "Latvia"=>"Riga","Malta"=>"Valetta",
"Austria" => "Vienna", "Poland"=>"Warsaw") ;
asort($ceu) ;
foreach($ceu as $country => $capital)
{
echo "The capital of $country is $capital"."\n" ;
}
echo "\n";

function w3rfunction($value,$key)
{
echo "$key : $value"."\n";
}
$a = '{"Title": "The Cuckoos Calling",
"Author": "Robert Galbraith",
"Detail":
{ 
"Publisher": "Little Brown"
 }
  }';
$j1 = json_decode($a,true);
array_walk_recursive($j1,"w3rfunction");

echo "\n";
$original = array( '1','2','3','4','5' );
echo 'Original array : '."\n";
foreach ($original as $x) 
{echo "$x ";}
$inserted = '$';
array_splice( $original, 3, 0, $inserted ); 
echo " \n After inserting '$' the array is : "."\n";
foreach ($original as $x) 
{echo "$x ";}
echo "\n";

echo "\n";
echo "
Associative array : Ascending order sort by value
";
$array2=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"); asort($array2);
foreach($array2 as $y=>$y_value)
{
echo "Age of ".$y." is : ".$y_value."
";
}
echo "
Associative array : Ascending order sort by Key
";
$array3=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"); ksort($array3);
foreach($array3 as $y=>$y_value)
{
echo "Age of ".$y." is : ".$y_value."
";
}
echo "
Associative array : Descending order sorting by Value
";
$age=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
arsort($age);
foreach($age as $y=>$y_value)
{
echo "Age of ".$y." is : ".$y_value."
";
}
echo "
Associative array : Descending order sorting by Key
";
$array4=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"); krsort($array4);
foreach($array4 as $y=>$y_value)
{
echo "Age of ".$y." is : ".$y_value."
";
} 
echo "\n";
$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
$temp_array = explode(',', $month_temp);
$tot_temp = 0;
$temp_array_length = count($temp_array);
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}
 $avg_high_temp = $tot_temp/$temp_array_length;
 echo "Average Temperature is : ".$avg_high_temp."
"; 
sort($temp_array);
echo " List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
echo $temp_array[$i].", ";
}
echo "List of five highest temperatures :";
for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
{
echo $temp_array[$i].", ";
}

?>


</br>
</body>
</html>
</html>
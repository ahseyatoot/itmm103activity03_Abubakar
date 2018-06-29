<html>
<head>
<title>SECTION D</title>
</head>
<body>
<h2><center>THIS IS SECTION D</center></h2>
<br>
<p>
<a href="../index.html"><center>Main Page</center><br></a>
<a href="../SECTIONA/seca.php"><center>Section A</center><br></a>
<a href="../SECTIONB/secb.php"><center>Section B</center><br></a>
<a href="../SECTIONC/secc.php"><center>Section C</center><br></a>
<a href="../SECTIONE/sece.php"><center>Section E</center><br></a>
<a href="../SECTIONF/secf.php"><center>Section F</center><br></a>
<a href="../SECTIONG/secg.php"><center>Section G</center><br></a>
<a href="../SECTIONH/sech.php"><center>Section H</center><br></a>
<a href="../SECTIONI/seci.php"><center>Section I</center><br></a>
</p>

<?php 
   echo "Number 1.Factorial of a Number <br><br>";
function factorial_of_a_number($n)
{
  if($n ==0)
    {
	   return 1;
    }
  else 
    {	
	   return $n * factorial_of_a_number($n-1);
    }
	}
print_r(factorial_of_a_number(4)."<br>");

echo "<br>";
echo "Number 2. Prime or not<br><br>";
function IsPrime($n)
{
 for($x=2; $x<$n; $x++)
   {
      if($n %$x ==0)
	      {
		   return 0;
		  }
    }
  return 1;
   }
$a = IsPrime(3);
if ($a==0)
echo 'This is not a Prime Number.....'."<br>";
else
echo 'This is a Prime Number..'."<br>";

echo "<br>";
echo "Number 3. Reverse String<br><br>";
function reverse_string($str1)
{
 $n = strlen($str1);
 if($n == 1)
   {
    return $str1;
   }
 else
   {
   $n--;
   return reverse_string(substr($str1,1, $n)) . substr($str1, 0, 1);
   }
}
print_r(reverse_string('1234')."<br>");

echo "<br>";
echo "Number 4. Sorting Arrays <br><br>";
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);
$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
    echo $cars[$x];
    echo "<br><br>";
}
 echo "Number 5. Lowercase <br><br>";  
function is_str_lowercase($str2)
   {
    for ($sc = 0; $sc < strlen($str2); $sc++) {
	      if (ord($str2[$sc]) >= ord('A') &&
          ord($str2[$sc]) <= ord('Z')) {
      return false;
         }
         }
      return true;
       }
var_dump(is_str_lowercase('abc def ghi'));
var_dump(is_str_lowercase('abc dEf ghi'));
echo "<br><br>";
echo "Number 6. Odd or Even <br><br>";
function check($number){
    if($number % 2 == 0){
        echo "Even"; 
    }
    else{
        echo "Odd";
    }
}
 
$number = 39;
check($number)

    
    ?>
       

</br>
</body>
</html>

























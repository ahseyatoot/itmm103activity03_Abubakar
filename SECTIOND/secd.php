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

    <h4>
Number 1: Write a function to calculate the factorial of a number (a non-negative integer). The function
accepts the number as an argument.<br><br>
   
    function factorial_of_a_number($n)<br>
{<br>
  if($n ==0)<br>
    {<br>
	   return 1;<br>
    }<br>
  else<br> 
    {	<br>
	   return $n * factorial_of_a_number($n-1);<br>
    } } <br>
print_r(factorial_of_a_number(4)."<br>");
</h4>
        
<?php 
   
echo "Expected Output: 24 <br>";
?>
        <h4>
Number 2: Write a function to check a number is prime or not.<br><br>
   function IsPrime($n){ <br>
 for($x=2; $x<$n; $x++) { <br>
      if($n %$x ==0){ <br>
		   return 0; <br>
		  }   } <br>
  return 1; <br>
   } <br>
$a = IsPrime(3); <br>
if ($a==0) <br>
echo 'This is not a Prime Number.....'."<br>";
else<br>
echo 'This is a Prime Number..'."<br>";

  </h4>
        
        <?php


echo "Sample Number: 20<br>";
echo "Expected Output:This is a Prime Number.";
echo "<br><br>";
?>
     <h4>

               
Number 3: Write a function to reverse a string.<br><br>";
function reverse_string($str1){ <br>

 $n = strlen($str1); <br>
 if($n == 1) {<br>
    return $str1; <br>
   } <br>
 else { <br>
   $n--; <br>
   return reverse_string(substr($str1,1, $n)) . substr($str1, 0, 1); <br>
   } }<br>
         print_r(reverse_string('1234')."\n");<br>

            </h4>
            <?php
echo "Sample string: 1234 <br>";
echo "Expected Output: 4321 <br>";
?>
            <h4>

           
echo "<br>";
echo "Number 4. Write a function to sort an array. (No using of predefined function) <br><br>";
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);
$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
    echo $cars[$x];
    echo "<br><br>";
                
}
                </h4>
       <?php     
                echo "Cars in Alphabetical Order:<br>";
                echo "Expected Output: BMW, TOYOTA, VOLVO <br>"
                
                
                ?>         
                
            <h4>
                
Number 5. Write a PHP function that checks if a string is all lowercase.e <br><br>";  
function is_str_lowercase($str2)  {<br>
    for ($sc = 0; $sc < strlen($str2); $sc++) { <br>
	      if (ord($str2[$sc]) >= ord('A') && <br>
          ord($str2[$sc]) <= ord('Z')) { <br>
      return false; <br>
         } } <br>
      return true;<br>
       } <br>
var_dump(is_str_lowercase('abc def ghi')); <br>
var_dump(is_str_lowercase('abc dEf ghi')); <br>
echo "<br><br>";

            </h4>
            
            <?php
                    function is_str_lowercase($str2)  {
    for ($sc = 0; $sc < strlen($str2); $sc++) { 
	      if (ord($str2[$sc]) >= ord('A') && 
          ord($str2[$sc]) <= ord('Z')) { 
      return false; 
         } } 
      return true;
       } 
var_dump(is_str_lowercase('abc def ghi')); 
var_dump(is_str_lowercase('abc dEf ghi')); 
echo "<br><br>";
                    echo "<br>";
 ?>
            <h4>
Number 6.Write a function to check if a number is odd or even. <br><br>";
function check($number){<br>
    if($number % 2 == 0){<br>
        echo "Even"; <br>
    }
    else{<br>
        echo "Odd";<br>
    } }<br>
 $number = 39; <br>
check($number)<br>

    
            </h4>
            <?php
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

























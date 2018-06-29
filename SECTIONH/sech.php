<html>
<head>
<title>SECTION H</title>
</head>
<body>
<h2><center>THIS IS SECTION H</center></h2>
<br>
<p>
<a href="../index.html"><center>Main Page</center><br></a>
<a href="../SECTIONA/seca.php"><center>Section A</center><br></a>
<a href="../SECTIONB/secb.php"><center>Section B</center><br></a>
<a href="../SECTIONC/secc.php"><center>Section C</center><br></a>
<a href="../SECTIOND/secd.php"><center>Section D</center><br></a>
<a href="../SECTIONE/sece.php"><center>Section E</center><br></a>
<a href="../SECTIONF/secf.php"><center>Section F</center><br></a>
<a href="../SECTIONG/secg.php"><center>Section G</center><br></a>
<a href="../SECTIONI/seci.php"><center>Section I</center><br></a>
</p>

<h4>
Number 1: Write a PHP script to find the maximum and minimum marks from the following set of arrays.<br><br>

Sample arrays :<br>
$marks1 = array(360,310,310,330,313,375,456,111,256); <br>
$marks2 = array(350,340,356,330,321); <br>
$marks3 = array(630,340,570,635,434,255,298);<br><br>
    
    $marks1 = array(360,310,310,330,313,375,456,111,256); <br>
$marks2 = array(350,340,356,330,321); <br>
$marks3 = array(630,340,570,635,434,255,298);<br> 
$max_marks = max(max($marks1),max($marks2),max($marks3)); <br>
$min_marks = min(min($marks1),min($marks2),min($marks3)); <br>
echo "Maximum marks : ".$max_marks."\n"; <br>
echo "Minimum marks : ".$min_marks."\n";<br>
    
    </h4>
    <?php
$marks1 = array(360,310,310,330,313,375,456,111,256); 
$marks2 = array(350,340,356,330,321); 
$marks3 = array(630,340,570,635,434,255,298); 
$max_marks = max(max($marks1),max($marks2),max($marks3)); 
$min_marks = min(min($marks1),min($marks2),min($marks3)); 
echo "Sample Outputs: <br>";
echo "Maximum marks : ".$max_marks."<br>";
echo "Minimum marks : ".$min_marks."<br>";
?>
    <h4>
Number 2: Write a PHP script which rounds the following values with 1 decimal digit precision.<br><br>

Sample values :<br>
1.65 <br>
1.65 <br>
-1.54<br><br>
        
echo round( 1.65, 1, PHP_ROUND_HALF_UP)."\n";   //  1.7
echo round( 1.65, 1, PHP_ROUND_HALF_DOWN)."\n"; //  1.6
echo round(-1.54, 1, PHP_ROUND_HALF_EVEN)."\n"; // -1.5
    </h4>
<?php
echo "Sample Outputs: <br>";
echo round( 1.65, 1, PHP_ROUND_HALF_UP)."<br>";   //  1.7
echo round( 1.65, 1, PHP_ROUND_HALF_DOWN)."<br>"; //  1.6
echo round(-1.54, 1, PHP_ROUND_HALF_EVEN)."<br>"; // -1.5
?>

    <h4>
 Number 3: Write a PHP function to convert Arabic numbers to Roman numerals.<br><br>
function arabic_rome($num){ <br>
$c='IVXLCDM'; <br>
for($x=5,$y=$result='';$num;$y++,$x^=7)<br> 
for($o=$num%$x,$num=$num/$x^0;$o--;$result=$c[$o>2?$y+$num-($num=-2)+$o=1:$y].$result);<br> 
return $result; <br>
} <br>
print_r(arabic_rome(101)."\n");<br>        
        
        </h4>
    <?php
echo "Sample Output: CI";


?>
    <h4>
Number 4: Write a PHP function to create a human-readable random string for a captcha.<br><br>        
 function random_string($length = 5){ <br>        
$chars = 'bcdfghjklmnpqrstvwxyzaeiou';<br>
for ($x = 0; $x < $length; $x++){ <br>        
$result .= ($x%2) ? $chars[mt_rand(19, 23)] : $chars[mt_rand(0, 18)];<br>       
}<br>        
return $result; <br>         
}<br>        
echo random_string();<br>
                  
    </h4>
    <?php
 echo "Sample Output: rasyn ";
?>
    <h4>
Number 5: Write a PHP script to convert scientific notation to an int and a float.<br><br>
$val = '4.5e3'; <br> 
$ival = (int) $val;<br> 
$fval = (float) $val;<br> 
echo $ival."\n";<br> 
echo $fval."\n";<br> 
Sample scientific notation : 4.5e3<br>
    </h4>
    
    <?php
$val = '4.5e3';
$ival = (int) $val;
$fval = (float) $val;
echo "Sample Outputs: <br>";
echo $ival."<br>";
echo $fval."<br>";
?>
    <h4>
Number 6: Write a PHP script to generate random 11 characters string of letters and numbers.<br><br>
        
        $x = rand(10e12, 10e16); <br>
echo base_convert($x, 10, 36)."\n";<br>
    </h4>
    
    <?php
$x = rand(10e12, 10e16);
echo "Sample Outputs:<br> ";
echo base_convert($x, 10, 36)."\n";
?>

</br>
</body>
</html>
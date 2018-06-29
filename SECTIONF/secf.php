<html>
<head>
<title>SECTION F</title>
</head>
<body>
<h2><center>THIS IS SECTION F</center></h2>
<br>
<p>
<a href="../index.html"><center>Main Page</center><br></a>
<a href="../SECTIONA/seca.php"><center>Section A</center><br></a>
<a href="../SECTIONB/secb.php"><center>Section B</center><br></a>
<a href="../SECTIONC/secc.php"><center>Section C</center><br></a>
<a href="../SECTIOND/secd.php"><center>Section D</center><br></a>
<a href="../SECTIONE/sece.php"><center>Section E</center><br></a>
<a href="../SECTIONG/secg.php"><center>Section G</center><br></a>
<a href="../SECTIONH/sech.php"><center>Section H</center><br></a>
<a href="../SECTIONI/seci.php"><center>Section I</center><br></a>
</p>
 
    
    
    <h4>
Number 1: Write a PHP script which will display the copyright information in the following format. To get current year you can use the date() function.<br><br>
        
        © <?php echo date('Y'); ?> PHP Exercises - w3resource
    </h4>
   <?php
echo "Expected Format : © 2013 PHP Exercises - w3resource <br>";


?>
    <h4>
Number 2: Create a simple 'birthday countdown' script, the script will count the number of days between current day and birthday.<br><br>
        


$target_days = mktime(0,0,0,12,31,2013);// modify the birth day 12/31/2013<br>
$today = time(); <br>
$diff_days = ($target_days - $today); <br>
$days = (int)($diff_days/86400); <br>
print "Days till next birthday: $days days!"."\n"; <br>
    </h4>
    <?php
$target_days = mktime(0,0,0,12,31,2013);// modify the birth day 12/31/2013
$today = time();
$diff_days = ($target_days - $today);
$days = (int)($diff_days/86400);
print "Days till next birthday: $days days!"."\n";

?>
    
 <h4>
Number 3: Write a PHP script to print the current date in the following format. To get current date's information you can use the date() function.<br><br>
     
    
echo date("Y/m/d") . "\n";<br>
echo date("y.m.d") . "\n";<br>
echo date("d-m-y")."\n";<br>

    </h4>
    
    <?php
echo "Outputs: <br>";
echo date("Y/m/d") . "<br>";
echo date("y.m.d") . "<br>";
echo date("d-m-y")."<br>";
?>

    <h4>
Number 4: Write a PHP script to add/subtract the number of days from a particular date.<br><br>
$dt='2011-01-01'; <br>
echo 'Original date : '.$dt."\n"; <br>
$no_days = 40; <br>
$bdate = strtotime("-".$no_days." days", strtotime($dt)); <br>
$adate = strtotime("+".$no_days." days", strtotime($dt)); <br>
echo 'Before 40 days : '.date("Y-m-d", $bdate)."\n"; <br>
echo 'After  40 days : '.date("Y-m-d", $adate)."\n"; <br>
        </h4>
        <?php
$dt='2011-01-01';
echo "Sample Outputs: <br>";
echo 'Original date : '.$dt."<br>";
$no_days = 40;
$bdate = strtotime("-".$no_days." days", strtotime($dt));
$adate = strtotime("+".$no_days." days", strtotime($dt));
echo 'Before 40 days : '.date("Y-m-d", $bdate)."<br>";
echo 'After  40 days : '.date("Y-m-d", $adate)."<br>";
?>
   <h4>
Number 5: Write a PHP script to calculate the current age of a person.<br><br>
$bday = new DateTime('11.4.1987'); <br>
$today = new Datetime(date('m.d.y'));<br>
$diff = $today->diff($bday);<br>
printf(' Your age : %d years, %d month, %d days', $diff->y, $diff->m, $diff->d);<br>
printf("\n");       <br>
    </h4>
    <?php
$bday = new DateTime('11.4.1987'); // Your date of birth
$today = new Datetime(date('m.d.y'));
$diff = $today->diff($bday);
echo "Sample Output: <br>";
printf(' Your age : %d years, %d month, %d days', $diff->y, $diff->m, $diff->d);
printf("<br>");
?>
    
    <h4>
Number 6: Write a PHP script to calculate weeks between two dates.<br><br>
        function week_between_two_dates($date1, $date2){ <br>
    $first = DateTime::createFromFormat('m/d/Y', $date1); <br>
    $second = DateTime::createFromFormat('m/d/Y', $date2); <br>
    if($date1 > $date2) return week_between_two_dates($date2, $date1); <br>
    return floor($first->diff($second)->days/7);<br>
}<br>
$dt1 = '1/1/2014'; <br>
$dt2 = '12/31/2014';<br>
echo 'Weeks between '.$dt1.' and '. $dt2. ' is '. week_between_two_dates($dt1, $dt2)."\n";<br>
    </h4>
    <?php
function week_between_two_dates($date1, $date2)
{
    $first = DateTime::createFromFormat('m/d/Y', $date1);
    $second = DateTime::createFromFormat('m/d/Y', $date2);
    if($date1 > $date2) return week_between_two_dates($date2, $date1);
    return floor($first->diff($second)->days/7);
}

$dt1 = '1/1/2014';
$dt2 = '12/31/2014';
echo "Sample Output: <br>";
echo 'Weeks between '.$dt1.' and '. $dt2. ' is '. week_between_two_dates($dt1, $dt2)."\n";
?>

</br> 
</body>
</html>
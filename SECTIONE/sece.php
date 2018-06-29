<html>
<head>
<title>SECTION E</title>
</head>
<body>
<h2><center>THIS IS SECTION E</center></h2>
<br>

<p>
<a href="../index.html"><center>Main Page</center><br></a>
<a href="../SECTIONA/seca.php"><center>Section A</center><br></a>
<a href="../SECTIONB/secb.php"><center>Section B</center><br></a>
<a href="../SECTIONC/secc.php"><center>Section C</center><br></a>
<a href="../SECTIOND/secd.php"><center>Section D</center><br></a>
<a href="../SECTIONF/secf.php"><center>Section F</center><br></a>
<a href="../SECTIONG/secg.php"><center>Section G</center><br></a>
<a href="../SECTIONH/sech.php"><center>Section H</center><br></a>
<a href="../SECTIONI/seci.php"><center>Section I</center><br></a>
</p>

<h4>
Number 1: Write a PHP script that removes the last word from a string. <br><br>
$str1 = 'The quick " " 	 brown fox';<br>
    echo preg_replace('/\s+/', '', $str1)."\n ";</h4>
    
<?php 
    echo "<br>";
        echo "Sample String: The Quick Brown Fox <br>";
echo "Expected Output: ";
    $str1 = 'The quick brown fox';
echo preg_replace('/\W\w+\s*(\W*)$/', '$1', $str1)."<br>";
    ?>

<h4>
Number 2: Write a PHP script that removes the whitespaces from a string. <br><br>
    $str1 = 'The quick " " 	 brown fox';<br>
echo preg_replace('/\s+/', '', $str1)."\n";
    </h4>
<p>
Sample String: The quick " " brown fox
    </p>
    <?php 
echo "Expected Output: ";
    $str2 = 'The quick " " 	 brown fox';
echo preg_replace('/\s+/', '', $str2)."\n"; 
    ?>
 <h4>
Number 3: Write a PHP script to remove nonnumeric characters except comma and dot.<br><br>
  
   $str1 = "$12,334.00A";<br>
echo preg_replace("/[^0-9,.]/", "", $str1)."\n"; 
    
    </h4>
    <?php 
    echo "<br>";
echo "Sample string : '$123,34.00A'<br>";
echo "Expected Output: ";
    $str1 = "$12,334.00A";
echo preg_replace("/[^0-9,.]/", "", $str1)."\n";
    
    ?>
    <h4>
        Number 4: Write a PHP script to remove all characters from a string except a-z A-Z 0-9 or " ".<br><br>
        $string = 'abcde$ddfd @abcd )der]';<br>
echo 'Old string : '.$string.'';<br>
$newstr = preg_replace("/[^A-Za-z0-9 ]/", '', $string);<br>
echo 'New string : '.$newstr."\n";
    </h4>
 <?php 
echo "<br>";
echo "Sample string : '$123,34.00A'<br>";
echo "Expected Output: 12,334.00";

       ?>   
</br>
</body>
</html>

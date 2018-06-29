<?php

phpinfo();

echo "<br>";
$var = 'PHP TUTORIAL';
echo "<hr>";

echo "<br>";

?>


<html>
<head>
       <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title><?php echo $var; ?> - W3resource!</title>
</head>
<body>
    
<h3><center><?php echo $var; ?></center></h3>
<br>
<p>PHP, an acronym for Hypertext Preprocessor, is a widely-used open source general-purpose scripting language. It is a cross-platform, HTML embedded server-side scripting language and is especially suited for web development.<br>
<a href="https://www.w3resource.com/php/php-home.php">Go to the <?php echo $var; ?></a><br><br></p>

<form method='POST'>
   <h2>Please input your name:</h2>
 <input type="text" name="name">
 <input type="submit" value="Submit Name">
   </form>
    <?php 
echo "<h3> Hello </h3>";
    
    
$url = 'https://www.w3resource.com/php-exercises/php-basic-exercises.php';
$url=parse_url($url);
echo 'Scheme : '.$url['scheme']."\n";
echo 'Host : '.$url['host']."\n";
echo 'Path : '.$url['path']."\n"; 
    
  echo "<br><br>";

    echo "<table border =\"1\" style='border-collapse: collapse'>";
	for ($row=1; $row <= 6; $row++) { 
		echo "<tr> \n";
		for ($col=1; $col <= 6; $col++) { 
		   $p = $col * $row;
		   echo "<td>$p</td> \n";
		   	}
	  	    echo "</tr>";
		}
		echo "</table>";
echo "<br><br>"

?>
   
    
<a href="../index.html"><center>Main Page</center><br></a>
<a href="../SECTIONB/secb.php"><center>Section B</center><br></a>
<a href="../SECTIONC/secc.php"><center>Section C</center><br></a>
<a href="../SECTIOND/secd.php"><center>Section D</center><br></a>
<a href="../SECTIONE/sece.php"><center>Section E</center><br></a>
<a href="../SECTIONF/secf.php"><center>Section F</center><br></a>
<a href="../SECTIONG/secg.php"><center>Section G</center><br></a>
<a href="../SECTIONH/sech.php"><center>Section H</center><br></a>
<a href="../SECTIONI/seci.php"><center>Section I</center><br></a>
    

</p>






</br>
</body>
</html>



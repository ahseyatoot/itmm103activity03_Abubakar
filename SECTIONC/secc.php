<html>
<head>
<title>SECTION C</title>
</head>
<body>
<h2><center>THIS IS SECTION C</center></h2>
<br>

<p>
<a href="../index.html"><center>Main Page</center><br></a>
<a href="../SECTIONA/seca.php"><center>Section A</center><br></a>
<a href="../SECTIONB/secb.php"><center>Section B</center><br></a>
<a href="../SECTIOND/secd.php"><center>Section D</center><br></a>
<a href="../SECTIONE/sece.php"><center>Section E</center><br></a>
<a href="../SECTIONF/secf.php"><center>Section F</center><br></a>
<a href="../SECTIONG/secg.php"><center>Section G</center><br></a>
<a href="../SECTIONH/sech.php"><center>Section H</center><br></a>
<a href="../SECTIONI/seci.php"><center>Section I</center><br></a>
</p>
<table align="left" border="1" cellpadding="3" cellspacing="0">
<?php

echo "Number 1. <br>";
for($x=1; $x<=10; $x++)
{
 if($x< 10)
 {
 echo "$x-";
 }
 else
  {
 echo "$x"."\n";
  }
}
echo "<br><br>";
echo "Number 2. <br><br>";
$n=5;
for($i=1; $i<=$n; $i++)
{
for($j=1; $j<=$i; $j++)
{
echo ' * ';
}
echo '<br>';
}
for($i=$n; $i>=1; $i--)
{
for($j=1; $j<=$i; $j++)
{
echo ' * ';
}
echo '<br> ';
}
echo "<br><br>";
echo "Number 3. <br><br>";
for($i=1;$i<=6;$i++)
{
echo "<tr>";
for ($j=1;$j<=5;$j++)
  {
  echo "<td>$i * $j = ".$i*$j."</td>";
  }
  echo "</tr>";
  }
echo "<br>";

?>

</table>
<table width="270px" cellspacing="0px" cellpadding="0px" border="1px">
   <!-- cell 270px wide (8 columns x 60px) -->
      <?php
echo "<br><br><br><br><br><br><br><br><br><br>";
echo "Number 4.<br><br>";
      for($row=1;$row<=8;$row++)
	  {
          echo "<tr>";
          for($col=1;$col<=8;$col++)
		  {
          $total=$row+$col;
          if($total%2==0)
		  {
          echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
          }
		  else
		  {
          echo "<td height=30px width=30px bgcolor=#000000></td>";
          }
          }
          echo "</tr>";
    }
          ?>
  </table>
<?php 
echo "<br><br><br><br><br><br><br><br>";
    echo "Number 5. <br><br>";
echo "<table border =\"1\" style='border-collapse: collapse'>";
	for ($row=1; $row <= 10; $row++) { 
		echo "<tr> \n";
		for ($col=1; $col <= 10; $col++) { 
		   $p = $col * $row;
		   echo "<td>$p</td> \n";
		   	}
	  	    echo "</tr>";
		}
		echo "</table>";
echo "<br>";
echo "Number 6. <br><br>";
echo "<pre>";
for ($row = 0; $row < 11; $row++) {
    for ($col = 0; $col <= 11; $col++) {
        if ($col == 5 OR ($row == 0 AND $col > 0 AND $col < 10) OR ($row == 10 AND $col > 0 AND $col < 10)) {
            echo "*";
        } else {
            echo "&nbsp;";
        }
    }
    echo "<br/>";
}
echo "</pre>";

    
    ?>
</br>
</body>
</html>
</html>
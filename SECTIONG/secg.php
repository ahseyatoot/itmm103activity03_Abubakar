<html>
<head>
<title>SECTION G</title>
</head>
<body>
<h2><center>THIS IS SECTION G</center></h2>
<br>
<p>
<a href="../index.html"><center>Main Page</center><br></a>
<a href="../SECTIONA/seca.php"><center>Section A</center><br></a>
<a href="../SECTIONB/secb.php"><center>Section B</center><br></a>
<a href="../SECTIONC/secc.php"><center>Section C</center><br></a>
<a href="../SECTIOND/secd.php"><center>Section D</center><br></a>
<a href="../SECTIONE/sece.php"><center>Section E</center><br></a>
<a href="../SECTIONF/secf.php"><center>Section F</center><br></a>
<a href="../SECTIONH/sech.php"><center>Section H</center><br></a>
<a href="../SECTIONI/seci.php"><center>Section I</center><br></a>
</p>

    <h4>
Number 1:Write a PHP script to : -<br><br>

a) transform a string all uppercase letters.<br> 
b) transform a string all lowercase letters. <br>
c) make a string's first character uppercase.<br>
d) make a string's first character of all the words uppercase. <br>
print(strtoupper("the quick brown fox jumps over the lazy dog."))."\n"; <br>     
print(strtolower("THE QUICK BROWN FOX JUMPS OVER THE LAZY DOG"))."\n"; <br>
print(ucfirst("the quick brown fox jumps over the lazy dog."))."\n"; <br>
print(ucwords("the quick brown fox jumps over the lazy dog."))."\n"; <br>
    </h4>
<?php
echo "Sample Outputs: <br>";
//all uppercase letters
print(strtoupper("the quick brown fox jumps over the lazy dog."))."<br>";
//all lowercase letters
print(strtolower("THE QUICK BROWN FOX JUMPS OVER THE LAZY DOG"))."<br>";
// make a string's first character uppercase
print(ucfirst("the quick brown fox jumps over the lazy dog."))."<br>";
// make a string's first character of all the words uppercase
print(ucwords("the quick brown fox jumps over the lazy dog."))."<br>";
?>
<h4>
Number 2: Write a PHP script to split the following string.<br><br>
$str1= '082307'; <br>
echo substr(chunk_split($str1, 2, ':'), 0, -1)."\n"; <br>   
    </h4>
    
    <?php
$str1= '082307'; 
echo "Sample Output: ";
echo substr(chunk_split($str1, 2, ':'), 0, -1)."\n";
?>
    
    <h4>
Number 3: Write a PHP script to check if a string contains a specific string?<br><br>
$str1 = 'The quick brown fox jumps over the lazy dog.'; <br>
if (strpos($str1,'jumps') !== false) {<br>
    echo 'The specific word is present.';<br>
 }<br>
else{<br>
    echo 'The specific word is not present.';<br>
 }<br>
    </h4>
    <?php
$str1 = 'The quick brown fox jumps over the lazy dog.';
if (strpos($str1,'jumps') !== false) 
 {
    echo 'The specific word is present.';
 }
else
 {
    echo 'The specific word is not present.';
 }
?>
    
    <h4>
        Number 4: Write a PHP script to extract the file name from the following string.<br><br>
        $path = 'www.example.com/public_html/index.php'; <br>
$file_name = substr(strrchr($path, "/"), 1);<br>
echo $file_name."\n"; // "index.php"<br>

    </h4>
    <?php
$path = 'www.example.com/public_html/index.php';
$file_name = substr(strrchr($path, "/"), 1);
echo $file_name."\n"; // "index.php"
?>
    <h4>
Number 5: Write a PHP script to generate simple random password [do not use rand() function] from a given string.<br><br>
  function password_generate($chars) { <br>
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz'; <br>
  return substr(str_shuffle($data), 0, $chars);<br>
}<br>
  echo password_generate(7)."\n";<br>      
    </h4>
    <?php
function password_generate($chars) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}
  echo password_generate(7)."\n";
?>
    <h4>
Number 6: Write a PHP script to print letters from 'a' to 'z'.<br><br>
        for ($x = ord('a'); $x <= ord('z'); $x++) <br>
 echo chr($x); <br>
 echo "\n"<br>
    </h4>
    <?php
for ($x = ord('a'); $x <= ord('z'); $x++)
 echo chr($x);
 echo "\n"
?>
</br>
</body>
</html>
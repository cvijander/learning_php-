<?php

$age =34;

echo $age;  // Outputs 34
echo' ';
$age = 35;  // Happy birthday

print("\n");

$double_age = $age *2; 
echo $double_age;  // Outputs 70


?>

<?php

$name = "Joe";
$first_letter = 'J';
$name1 = 'Joe';

echo "Hello, $name1"; // this will work 

echo' ';
echo'Hello, $name1'; // this will just print $name1
echo 'Hello, '.$name1 . '!' ;// this is concatination in php and now it works 

// So to use the Variable $name, we need to put in in double quotes  
// any string in double quotes will be procesed before it is outputed 

echo 'Welcome to Joe\'s Webiste';
//  Escape characters 
//  \n for the new line
//   \\ for a backslash
//   \$ for a dollar sign
//   \t for a tab 
?>

<?php
  echo "This is line 1 \n";
  echo "This is line 2 \n"; 
?>

<?php
  echo 'Joe\'s Nickname in HS was "Joey Calzone"';  // now it is working
  echo  "Joe's Nickname in HS was \"Joey Calzone\"";  // and now is also working


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php   

// Numbers
 $number = 1;
 echo $number;
 echo "\n";
 $new_number = 2.1;
 echo $new_number;


// Addition and Subtraction
  echo 6 + 6;

// Using Number Variables

$last_month = 1187.23;
$this_month = 1089.98; 

echo $last_month - $this_month;


// Multiplication and Division
$num_languages = 4;
$months = 11;
$days = $months * 16;
$days_per_language =  $days / $num_languages ; 
echo $days_per_language;

// Exponentiation 
echo 8**2;

// Modulo 

echo 82 % 6;

// Order of Operations 

// I’m trying to figure out how much money I should have. At the start of the day I had $94.
// I spent $4.25 on coffee
// I went out for a meal. The bill was $23.50, but I also gave a 20% tip.
// Some friends and I found $20 on the ground and split it four ways

echo 94 - 4.25 + 7 - (23.50 + 23.50 * .2) + 20 /4;

// Mathematical Assignment Operators

$my_num = 2;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;

$answer -= $my_num;
echo $answer;


// Review 

// Parenthesis ()
// Exponents **
// Multiplication *
// Divison /
// Addition +
// Subtration -
// PEMDAS

/* Operation:	 Long Syntax:	  Short Syntax:
Add	           $x = $x + $y	  $x += $y
Subtract	     $x = $x - $y	  $x -= $y
Multiply	     $x = $x * $y	  $x *= $y
Divide	       $x = $x / $y	  $x /= $y
Mod	           $x = $x % $y	  $x %= $y */


?>
    
</body>
</html>
<?php 

// Strings 

echo "Hello World";

// Escape Sequences 

echo "1. Teach PHP.";
echo "\n2. Read Quran";
echo "\n3. Go \"gym\"";

// String Concatenation


echo "Code". "cademy";
echo "\nMy name is:" . " Shahed Ali "; 

echo "\n". "tur". "duck". "en";

// Variables

$house = "Semi Detatched";
$biography = "\n Arthur morgan was an outlaw who found redemption";
$favorite_food = "\n"."tur"."duck"."en"; // use the . to combine strings together

// Using Variables

$name =  "Shahed Ali";
$language = "PHP";

echo "Arthur Morgan ". $name; // Concatenating Strings

echo "\n". $language; 


// Variable Parsing

$noun = "walking";
$adjective = "aggresivley";
$verb = "hello";

echo "The world's most beloved $noun was very $adjective and loved to $verb every single day.";


//Fix the code below and uncomment it:

echo "\nI have always been obsessed with ${noun}s. I'm ${adjective}ish. I'm always ${verb}ing."


// Variable Reassignment 


$movie = "___";
// Add your code here:

$movie =  "Red Dead Redemption";

$old_favorite = $movie;

  echo "I'm a fickle person, my favorite movie used to be $movie.";
  
// Add a statement here:

$movie = "Walking Dead";
  
  
  echo "\nBut now my favorite is $movie.";
  
// Add a statement below:

echo "\nBut $old_favorite will always be gold for me"; 

// Concatenating Assignment Operator


echo "I'm going on a picnic!";

$sentence = "\nI'm going on a picnic, and I'm taking apples";

echo $sentence;

// Write your code below:

$sentence .= ", b";

echo $sentence;

$sentence .= ", c";

echo $sentence;

// Assign by reference

/* Imagine a lot of code here */  
$very_bad_unclear_name = "15 chicken wings";

// Write your code here:



$order =& $very_bad_unclear_name;

$order .= "\n10 Chicken Strips";
  // Don't change the line below
  echo "\nYour order is: $very_bad_unclear_name.";

// Use .= to combine 2 strings together 


 
?>
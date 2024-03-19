<?php

// in PHP a variables start with a dollar sign ($), followed by the name of the variables

// $txt = "Hello world!";
// $x = 5;
// $y = 10.5;

// the variable $txt will hold the value Hello world!, the variable $x will hold the value 5, and the variable $y will hold the value 10.5.  

// $txt = "W3Schools.com";
// echo "I love $txt! <br>";

// The following example will produce the same output as the example above:

// $txt1 = "W3Schools.com1";
// echo "I love " . $txt1 . "!";

//MUST SEARCH "STRICT AND NON-STRICT";

/*
You will learn more about
 "strict" - "STRICT" and "non-strict" - "NON-STRICT" requirements,
  and data type declarations in the PHP Functions chapter.
*/

/* 

PHP has three different variable scopes:

-  local
-  global
-  static

*/

// Example of global variables

// $x = 5; // global scope

// function myTest() {
//     // using x inside this function will generate an error
//     echo "<p>Variable x inside function is: $x</p>";
// }
// myTest();

// echo "<p>Variable x outside function is: $x</p>";


// Variable with local scope:

// function myTest(){

//   $x = 5; // this is a local scope variable

//   echo "<p> variables x inside function is: $x </p>";

// }

// myTest();

// // using x outside the function will generate an error
// echo "<p>Variable x outside function is: $x</p>";


/**
 * 
 * PHP The global Keyword
 * 
 * The global keyword is used to access a global variable from within a function.
 *
 * To do this, use the global keyword before the variables (inside the function):
 * 
 */

 //   $x = 5;
//   $y = 10;

//  function myTest(){

//   global $x, $y;

//   $y = $x + $y;

//  }

//  myTest();

//  echo $y;


//  PHP also stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable. This array is also accessible from within functions and can be used to update global variables directly.


// $x = 5;
// $y = 10;

// function myTest(){

//   $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];

// }

// myTest();

// echo $y;// output will be 15



// Static variables

function myTest(){

static $x = 'A';
echo $x;
$x++;

}

myTest();
myTest();
myTest();
myTest();


?>
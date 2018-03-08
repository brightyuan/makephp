<?php
/*1.global keyword*/
/*
$x=5;  // global scope
$y=10;

function myTest(){
global $x,$y;  //global keyword is used to access a global variable from within a function.
$y=$x+$y;
} 

myTest(); // run function
echo $y; // output the new value for variable $y
*/


/*2.Local and Global Scope*/
/*
$x=5; // global scope

function myTest()
{
$y=10; // local scope
echo "Test variables inside the function:";
echo "Variable x is: $x";
echo "\n";
echo "Variable y is: $y";
} 

myTest();

echo "Test variables outside the function:";
echo "Variable x is: $x";
echo "\n";
echo "Variable y is: $y";
*/


/*3.$GLOBALS[index]
 * stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable*/
/*
$x=54;
$y=104;

function myTest(){
$GLOBALS['y']=$GLOBALS['x']+$GLOBALS['y'];
} 

myTest();
echo $y; // outputs 15
*/

/*4.static Keyword
 * Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted.
 * */
/*
function myTest(){
static $x=0;
echo $x."\n";
$x++;
}
myTest();
myTest();
myTest();
*/

//$va = "hello";
//$hello = "hh";
//$hh = "ccc";
//echo  $$va ;
//echo  $$$va ;
//echo " $va  $$va";


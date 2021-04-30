<?php
/**
 $a == $b		Equal	TRUE if $a is equal to $b after type juggling.
 $a === $b		Identical	TRUE if $a is equal to $b, and they are of the same type.
 $a != $b		Not equal	TRUE if $a is not equal to $b after type juggling.
 $a <> $b		Not equal	TRUE if $a is not equal to $b after type juggling.
 $a !== $b		Not identical	TRUE if $a is not equal to $b, or they are not of the same type.
 $a < $b		Less than	TRUE if $a is strictly less than $b.
 $a > $b		Greater than	TRUE if $a is strictly greater than $b.
 $a <= $b		Less than or equal to	TRUE if $a is less than or equal to $b.
 $a >= $b		Greater than or equal to	TRUE if $a is greater than or equal to $b.
 */

/*1.Comparison Operators*/
var_dump(0 == "a"); // 0 == 0 -> true
var_dump("1" == "01"); // 1 == 1 -> true
var_dump("10" == "1e1"); // 10 == 10 -> true
var_dump(100 == "1e2"); // 100 == 100 -> true

switch ("a") {
	case 0:
		echo "0";
		break;
	case "a": // never reached because "a" is already matched with 0
		echo "a";
		break;
}
/*2.Comparison with Various Types*/

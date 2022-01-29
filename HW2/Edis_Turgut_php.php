<?php
/*
1. How are the boolean values represented?

2. What operators are short-circuited?

3. How are the results of short-circuited operators computed? (Consider also function calls)

4. What are the advantages about short-circuit evaluation?

5. What are the potential problems about short-circuit evaluation?
*/

//1) In PHP, boolean is represented as either true or false. 
//However, when the value is printed, true printed as 1 and false printed as nothing
$val1 = true;
$val2 = false;
$val3 = ($val2 == $val1); 
print("The value is $val3\n"); //Prints empty since val3 is false
print(var_dump($val3)); //Prints the value of the boolean

//Check the string and type value as an example for boolean representation
$val1_str = 'true';
$val2_str = 'false';
$val1_chck = ($val1 == $val1_str);
print("The check of true and string true is $val1_chck\n" );

$val2_chck = ($val2 == $val2_str);
print("The check of false and string false is $val2_chck\n"); //It prints empty since it is false
print("----------------------------------\n");

//2) In PHP, OR "||",  AND "&&" operators are short-circuited. 
//These operators are evaluated from left to right. 
$val3 = 67;
$val4 = 41;
//Or "||" operator example
$val5 = (($val3>$val4) || ($val4>$val3));
print("67>41 || 41>67 returns $val5\n");

//And "&&" operator
$val5 = (($val3<$val4) && ($val3>$val4));
print("67<41 && 67>41 returns $val5\n");
print("----------------------------------\n");

//3) In PHP, results are computed from left to right.
//For "||" OR operator, the value is the left if the left is true, otherwise the value is the right
$res = (trueFunc() || ($val3 < $val4)); //trueFunc() returns true, so it does not calculate val3 < val4
print($res);
print("\n");
$res2 = (($val3 > $val4) || ($val3 < $val4)); //left is false, so the result is the right
print($res2);
print("\n");

//falseFunc() is not calculated since the left is true
print((84 > 0 || falseFunc()));
print("\n");
//trueFunc() is not calculated since the left is false
print(((0 > 55) && (trueFunc())));
print("\n");

//4) The long calculations and errors can be avoided.
$val6 = 5;
var_dump(($val6 < 6) || inf_loop($val6)); //Left is true, so the right is never calculated
var_dump($val6 > 6) && inf_loop($val6); //Left is false, so the right is never calculated

/* 5)
    Because of the RHS short-circuited, programmer may not even know the called function is working or not. 
    It may be critical when in a situation like the function is designed for the allocate system resources.
    The execution of the program may slow down because of the branch-prediction got wrong predictions. 
    We know that this situation slows down the program execution in modern processors.
*/

//This function always returns false
function falseFunc(){
    return false;
}
//This function always returns true  
function trueFunc(){
    return true;
}
//This function gives error about the memory since it is infinite loop
function inf_loop($x){
    if($x == -1){
      return false;
    }
    else {
      return inf_loop($x);
    }
}
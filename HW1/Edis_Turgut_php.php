<?php

#1 What types are legal for subscripts?
#PHP arrays can have either integers or strings as subscripts
$arr = array(1,2,3,4,5,6,7,8,9,10);

foreach($arr as $x) {
    echo $x, ' ';    
  } 
$pos = 6;
echo "\n";

echo($arr[$pos]);
$rng = range($arr, 4);
echo "\n";

foreach($rng as $x) {
  echo $x, ' ';    
}
$result = array_slice($arr,3,7);
echo "\n";

foreach($result as $x) {
  echo $x, ' ';    
}

#PHP arrays can have either integers or strings as subscripts
#Used string as a subscript value
$arr = array('fname' => 'turgut',
              'mname' => 'alp',
              'lname' => 'edis',
              'dept' => 'cs');
echo "\n";

  
foreach($arr as $x) {
    echo $x, ' ';    
  }
echo "\n";


#2 - Range is checking. If the index is out of bound, it will return undefined offset error.
$pos = "lname";
echo "\n";
echo($arr[$pos]);

echo "\n";
#echo($arr[11]);
#echo($arr[-2]);
#If line 48 and 49 are tried to execute,
#Undefined offset: 11 in Edis_Turgut_php.php, Undefined offset: -2 in /Edis_Turgut_php.php will return

#3 - When are subscript ranges bound?
#PHP supports heap-dynamic arrays therefore binding of subscript ranges is dynamic and bound at runtime.

#4 - When does allocation take place?
#PHP supports heap-dynamic arrays therefore storage allocation is dynamic and can change any number of times and it takes place at runtime.

#5 - Are ragged or rectangular multidimensional arrays allowed, or both?
#PHP supports rectangular arrays but not ragged arrays
#Defining a multidimensional array
  $arr = array(
    array(
      "fname" => "turgut",
      "lname" => "edis",
    ),
    array(
      "fname" => "huseyin",
      "lname" => "edis",
    ),
    array(
      "fname" => "mine",
      "lname" => "edis",
    ),
  );

  foreach($arr as $x) {
      echo $x['fname'], "\n";
      echo $x['lname'], "\n";
  }
  echo "--------------------\n";

#6 - Can array objects be initialized?
#Array objects can be initialized in PHP.
  $arr = array("turgut", "31", "huseyin", "55","mine", "45");
  echo "mine is " . $arr[5] . " years old.\n";
  echo "--------------------\n";

#7 - Are any kind of slices supported?
#PHP supports slices with array_slice function.
  $arr = array(1,2,3,4,5,6,7,8,9,10);
  $result = array_slice($arr,3,7);
  echo "\n";
  
  foreach($result as $x) {
    echo $x, ' ';    
  }

#8 - Which operators are provided?
#PHP arrays supports these kinds of operations.
/*
  +	Union	$x + $y	Union of $x and $y	
  ==	Equality	$x == $y	Returns true if $x and $y have the same key/value pairs	
  ===	Identity	$x === $y	Returns true if $x and $y have the same key/value pairs in the same order and of the same types	
  !=	Inequality	$x != $y	Returns true if $x is not equal to $y	
  <>	Inequality	$x <> $y	Returns true if $x is not equal to $y	
  !==	Non-identity	$x !== $y	Returns true if $x is not identical to $y
*/
  echo "\n";
  $x = array(1,3,5,7,9);
  $y = array(2,4,6,8,10);
  var_dump($x == $y);

  echo "\n";
  $x1 = array(1,3,5,7,9);
  $y1 = array(1,3,5,7,9);
  var_dump($x1 === $y1);

  echo "\n";
  $x = array(1,3,5,7,9);
  $y = array(1,3,5,7,9);
  var_dump($x != $y);

  echo "\n";
  $x = array(1,3,5,7,9);
  $y = array(1,3,5,7,9); 
  var_dump($x <> $y);
  
  echo "\n";
  $x = array(1,3,5,7,9);
  $y = array(1,3,5,7,9);
  var_dump($x !== $y);
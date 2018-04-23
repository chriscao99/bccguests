<?php

$array = array();

$name = $_POST["FirstName"]
$first = strtolower($name);
$string = str_replace(' ', '', $first);

if(is_null($array[$string]))
{
  $array[$string] = 9;
  echo "Access granted! " .$name. " has 9 guest passes left.";
}
if($array[$string] <= 0)
{
  echo "Access denied, " .$name. " has 0 guest passes left.";
}
if($array[$string] <= 9 && $array[$string] > 0){
  $array[$string] -= 1;
  echo "Access granted! " .$name. " has " .$array[$string]. " guest passes left.";
}




?>

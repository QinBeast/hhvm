<?php

function foo($a) {
  print "foo $a\n";
}

function bar(&$a) {
  $a = 2;
  return $a;
}

function baz($a) {
  return 2;
}

$a = array(1, 2);
array_map("foo", $a);

$a = call_user_func("baz", $a);
var_dump($a);

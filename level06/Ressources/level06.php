#!/usr/bin/php
<?php

function y($m) 
{
	$m = preg_replace("/\./", " x ", $m);
	$m = preg_replace("/@/", " y", $m);
	return $m;
}

function x($y, $z)
{
	$a = file_get_contents($y);
	$a = preg_replace("/(\[x (.*)\])/e", "y(\"\\2\")", $a);
	$a = preg_replace("/\[/", "(", $a);
	$a = preg_replace("/\]/", ")", $a);
	return $a;
}

$r = x($argv[1], $argv[2]);
print $r;

?>




#!/usr/bin/php
<?php

function y($m) { return $m; }

$a = file_get_contents($argv[1]);
print preg_replace("/(\[x (.*)\])/e", "y(\"\\2\")", $a);

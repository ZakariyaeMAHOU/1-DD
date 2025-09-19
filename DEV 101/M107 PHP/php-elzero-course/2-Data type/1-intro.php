<?php
/*
============================================
= Data Types
= ----------
= bool  => Boolean
= int   => Integer
= float => Floating Point Number | double
= string
= array
= Other Types
= gettype()
============================================
*/
// boolean 
echo gettype(True);
echo '<br>';
// integer
echo gettype(100);
echo '<br>';
// float || double
echo gettype(70.30);
echo '<br>';

// string
echo gettype('Elzero');
echo '<br>';
echo gettype("Elzero");
echo '<br>';
echo gettype(`Elzero`); // null
echo '<br>';

// Array
echo gettype(array("EG" => "Egypt", "KSA" => "Saudi Arabia"));
echo '<br>';
echo gettype(array("Egypt", "Saudi Arabia"));
echo '<br>';
echo gettype(["Egypt", "Saudi Arabia"]);
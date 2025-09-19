<?php
echo lcfirst("Elzero Web School") . "<br>"; // Lower case first letter => elzero Web School
echo ucfirst("elzero web school") . "<br>"; // Upper case first letter => Elzero web school
echo strtolower("ELZERO WEB SCHOOL") . "<br>"; // String to lower => elzero web school
echo strtoupper("elzero web school") . "<br>"; // String to upper => ELZERO WEB SCHOOL
echo ucwords("elzero web school") . "<br>"; // Upper case words => Elzero Web School
echo ucwords("elzero web|school", "|") . "<br>"; // Upper case words with custom delimiter => Elzero Web|School
echo str_repeat("Elzero", 3); // String repeat => ElzeroElzeroElzero
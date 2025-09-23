<?php
echo lcfirst("Elzero Web School") . "<br>"; // Lower case first letter => elzero Web School
echo ucfirst("elzero web school") . "<br>"; // Upper case first letter => Elzero web school
echo strtolower("ELZERO WEB SCHOOL") . "<br>"; // String to lower => elzero web school
echo strtoupper("elzero web school") . "<br>"; // String to upper => ELZERO WEB SCHOOL
echo ucwords("elzero web school") . "<br>"; // Upper case words => Elzero Web School
echo ucwords("elzero web|school", "|") . "<br>"; // Upper case words with custom delimiter => Elzero Web|School
echo str_repeat("Elzero", 3); // String repeat => ElzeroElzeroElzero


###########################################


// implode(Separator[Optional], Array[Required])
$friends = ["Ahmed", "Osama", "Ali", "Salem"];
echo implode("@@", $friends) . "<br>";// Ahmed@@Osama@@Ali@@Salem

// explode(Separator[Required], String[Required], Limit[Optional])
$str = "Elzero Web School Is Cool";
echo "<pre>";
print_r(explode("I", $str)); // [Elzero, Web, School, Is, Cool]
echo "</pre>";

echo str_shuffle("Elzero") . "<br>"; // String shuffle => (نتيجة عشوائية مثل: oEelzr)
echo strrev("Elzero") . "<br>"; // String reverse => orezlE

echo strlen("   Elzero  ") . "<br>"; // String length with spaces => 11
echo strlen(trim("   Elzero  ")) . "<br>"; // String length after trim => 6

echo trim("#@@Elzero@@@###", "@#") . "<br>"; // Elzero

echo rtrim("#@@Elzero@@@###", "#@") . "<br>";// #@@Elzero
echo ltrim("#@@Elzero@@@###", "#@") . "<br>";// Elzero@@@###


###########################################


// chunk_split(String[Required], Length[Optional], End[Optional])
echo chunk_split("Elzero Web School", 3, "@"); //Elz@ero@ We@b S@cho@ol@
echo '<br>';

// str_split(String[Required], Length[Optional])
echo '<pre>';
print_r(str_split("Elzero", 2)); // [El, ze, ro]
echo '</pre>';

// strip_tags(String[Required], Allowed[Optional])
echo strip_tags("<h3>Hello <b>Elzero</b></h3>", "<h3>"); // <h3>Hello Elzero</h3>
echo '<br>';


############################################


var_dump(strpos("Hello Hello", "H")); // 0
echo '<br>';
var_dump(stripos("Hello Hello", "h")); // 0
echo '<br>';
var_dump(strrpos("Hello Hello", "H")); // 6
echo '<br>';
var_dump(strripos("Hello Hello", "h")); // 6
echo '<br>';

var_dump(substr_count("Hello Hello", "He")); // 2
echo '<br>';
var_dump(substr_count("Hello Hello", "He", 1)); // 1
echo '<br>';
var_dump(substr_count("Hello Hello", "He", 1, 6)); // 0
echo '<br>';
var_dump(substr_count("abcdabcda", "abcda")); // 1


#################################################


parse_str("name=Osama&email=o@nn.sa&os=mac", $query);

echo '<pre>';
print_r($query);
echo '</pre>';

echo $query["name"] . "<br>";
echo $query["email"] . "<br>";
echo $query["os"] . "<br>";

echo "Hello [] () * + . <br>";
echo quotemeta("Hello [] () * + . <br>");

echo str_pad("12", 8, 0, STR_PAD_BOTH) . "<br>";
echo str_pad("321", 8, 0, STR_PAD_BOTH) . "<br>";
echo str_pad("1313", 8, 0, STR_PAD_LEFT) . "<br>";
echo str_pad("15435", 8, 0, STR_PAD_LEFT) . "<br>";
echo str_pad("500432", 8, 0, STR_PAD_RIGHT) . "<br>";

echo strtr("E@zero Web Schoo@", "@", "l");//Elzero Web School

echo "<br>";

$translation = ["@" => "l", "#" => "o"];
echo strtr("E@zer# Web Sch##@", $translation);//Elzero Web School


###################################################


echo str_replace("@", "o", "Elzer@ Web Sch@@l", $r); // Elzero Web School
echo '<br>';
echo "Replaces Count Is $r"; // 3
echo '<br>';
echo str_replace(["#", "@"], "A", "E#zer@ Web Sch@@#"); // EAzerA Web SchAAA
echo '<br>';
echo str_replace(["#", "@"], ["l", "o"], "E#zer@ Web Sch@@#"); // Elzero Web School

echo '<pre>';
print_r(str_replace("One", 1, ["One", "Two", "Three", "One", "One"])); //[1, "Two", "Three", 1, 1]
echo '</pre>';

echo '<pre>';
print_r(str_replace(["One", "Two"], [1, 2], ["One", "Two", "Three", "One", "One"])); //[1, 2, "Three", 1, 1]
echo '</pre>';

echo '<pre>';
print_r(str_replace(["One", "Two", "Three"], [1, 2], ["One", "Two", "Three", "One", "One"])); //[1, 2, , 1, 1]
echo '</pre>';

echo '<pre>';
print_r(str_ireplace(["one", "two"], [1, 2], ["One", "Two", "Three", "One", "One"]));
echo '</pre>';


##################################################


//substr_replace(String[Req], Replace With [Req], Start[Req], Length[$])
echo substr_replace("OneTwo", 1, 0); // 1
echo '<br>';
echo substr_replace("OneTwo", 1, 3); // One1
echo '<br>';
echo substr_replace("OneTwo", 1, -1); // OneTw1
echo '<br>';
echo substr_replace("OneTwo", 2, 2, 2); // On2wo
echo '<br>';
echo substr_replace("OneTwo", 2, 1, 4); // O2o
echo '<br>';

echo "<pre>";
print_r(substr_replace(["OneTwo", "ThreeFour"], 1, 0)); //[1, 1]
echo "</pre>";


#####################################################


$str = "Welcome To To To T Elzeroo Web School Website Very_Very_Very_Long";
echo strlen($str) . "<br>";
echo wordwrap($str, 8, "<br>", True);
echo "<br>";

echo ord("a"); // 97

echo "<br>";

echo chr(97); // a

echo "<br>";

echo similar_text("Elz@ero", "Elz_eroo");

echo "<br>";

echo similar_text("Elzero", "Elzeroo", $perc);

echo "<br>";

echo $perc;


#######################################################


echo strstr("Elzero Web", "W") . "<br>"; // Web
echo strstr("Elzero Web", "z") . "<br>"; // zero Web
echo strstr("Elzero Web", "W", True) . "<br>"; // Elzero
echo strlen(strstr("Elzero Web", "W", True)) . "<br>"; // 7


echo strstr("Elzero Web", "w") . "<br>"; // False
var_dump(strstr("Elzero Web", "w"));
echo '<br>';


echo stristr("Elzero Web", "w") . "<br>"; // Web
var_dump(stristr("Elzero Web", "w")); // Web
echo '<br>';

echo 10_000_000;
echo '<br>';

echo number_format(10000000.156023);
echo '<br>';
echo number_format(10000000.156023, 3);
echo '<br>';
echo number_format(10000000.156023, 3, "@");
echo '<br>';
echo number_format(10000000.156023, 3, "@", "#");
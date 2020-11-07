<!DOCTYPE html>
<html>
<head>
	<title>Class 2</title>
</head>
<body>
<?php
//Task-1
echo "Task-1"."<br>";
$firstname = "Nusaiba";
$lastname = "Mamun";
echo $firstname." ".$lastname. "<br>";
echo "<br>";
//Task-2
echo "Task-2"."<br>";
$name = "Nusaiba, Binte, Mamun";
$result = explode(',', $name);
print_r($result)."<br>";
echo "<br>";

$arr = array("Coders", "Trust", "Success", "Story");
$r = implode(" ", $arr);
print_r($r). "<br>";
echo "<br>"."<br>";

//Task-3
echo "Task-3"."<br>";
$name = "Nusaiba, Binte, Mamun";
$result = explode(",", $name);
$st = implode(" ", $result);
print_r($st). "<br>";
echo "<br>"."<br>";

//Task-4
echo "Task-4"."<br>";
$countArray = [];
$nameArray = array("Nusaiba", "Nafisa", "Saraf");
for ($i=0; $i < sizeof($nameArray); $i++){
	$countArray[$i] = strlen($nameArray[$i]);
}
$res = min($countArray);
$minStringIndex = array_search($res, $countArray);
echo $nameArray[$minStringIndex]."<br>";

if($res%2==0){
	echo "You are general."."<br>"."<br>";
}
else{
	echo "You are diffirent."."<br>"."<br>";
}

//Task-5
echo "Task-5"."<br>";
$a = 10;
$b = 20;
$c = 30;
if($a < $b && $b < $c){
	echo "Max number is 30";
}else{
	echo "Error!";
}
echo "<br>"."<br>";

//Task-6
echo "Task-6"."<br>";
function fullname($firstname, $lastname)
{
	echo "Welcome,  ".$firstname." ".$lastname."!";
}
fullname("Nusaiba", "Mamun");
echo "<br>"."<br>";

//Task-7
echo "Task-7"."<br>";
function add($num1, $num2)
{
	if($num1 > $num2){
		$ans = $num1 - $num2;
		return $ans;
	}
	else{
		$ans = $num1 + $num2;
		return $ans;
	}
}
$num1 = 10;
$num2 = 20;
echo add($num1, $num2);

?>
</body>
</html>
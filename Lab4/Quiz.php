<?php 
$answer1 = $_POST["q1"];
$answer2 = $_POST["q2"];
$answer3 = $_POST["q3"];
$answer4 = $_POST["q4"];
$answer5 = $_POST["q5"];

$solution1 = "Blue";
$solution2 = "EECS 448";
$solution3 = "Rony";
$solution4 = "A quiz";
$solution5 = "Earth";
$correct=0;

if($answer1==$solution1)
{
	echo "Question 1: What color is the sky on a sunny afternoon."."<br>";
	echo "Your answer: ".$answer1."<br>";
	echo "Correct answer: ".$solution1."<br>";
	echo "<p></p>";
	$correct++;
}
else
{
	echo "Question 1: What color is the sky on a sunny afternoon."."<br>";
	echo "Your answer: ".$answer1."<br>";
	echo "Correct answer: ".$solution1."<br>";
	echo "<p></p>";
}
if($answer2==$solution2)
{
	echo "Question 2: What class is this webpage for."."<br>";
	echo "Your answer: ".$answer2."<br>";
	echo "Correct answer: ".$solution2."<br>";
	echo "<p></p>";
	$correct++;
}
else
{
	echo "Question 2: What class is this webpage for."."<br>";
	echo "Your answer: ".$answer2."<br>";
	echo "Correct answer: ".$solution2."<br>";
	echo "<p></p>";
}
if($answer3==$solution3)
{
	echo "Question 3: What is the creator's of this Webpage's name."."<br>";
	echo "Your answer: ".$answer3."<br>";
	echo "Correct answer: ".$solution3."<br>";
	echo "<p></p>";
	$correct++;
}
else
{
	echo "Question 3: What is the creator's of this Webpage's name."."<br>";
	echo "Your answer: ".$answer3."<br>";
	echo "Correct answer: ".$solution3."<br>";
	echo "<p></p>";
}
if($answer4==$solution4)
{
	echo "Question 4: What are you doing right now."."<br>";
	echo "Your answer: ".$answer4."<br>";
	echo "Correct answer: ".$solution4."<br>";
	echo "<p></p>";
	$correct++;
}
else
{
	echo "Question 4: What are you doing right now."."<br>";
	echo "Your answer: ".$answer4."<br>";
	echo "Correct answer: ".$solution4."<br>";
	echo "<p></p>";
}
if($answer5==$solution5)
{
	echo "Question 5: What planet are you on right now."."<br>";
	echo "Your answer: ".$answer5."<br>";
	echo "Correct answer: ".$solution5."<br>";
	echo "<p></p>";
	$correct++;
}
else
{
	echo "Question 5: What planet are you on right now."."<br>";
	echo "Your answer: ".$answer5."<br>";
	echo "Correct answer: ".$solution5."<br>";
	echo "<p></p>";
}
echo $correct."/5" ."<br>";
echo "<p></p>";
if($correct==0)
{
	echo "0%";
	$correct=0;
}
else if($correct==1)
{
	echo "20%";
	$correct=0;
}
else if($correct==2)
{
	echo "40%";
	$correct=0;
}
else if($correct==3)
{
	echo "60%";
	$correct=0;
}
else if($correct==4)
{
	echo "80%";
	$correct=0;
}
else if($correct==5)
{
	echo "100%";
	$correct=0;
}
?>  

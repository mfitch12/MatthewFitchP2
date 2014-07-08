<?php

//initiate file array
$lines = array();

//initiate second array
$words = array();

$num1 = 1;
$num2 = 2;

for($i = 0; $i < 4; $i++)
{
	$tempArray = file("http://www.paulnoll.com/Books/Clear-English/words-0".($num1)."-0".($num2)."-hundred.html", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
	$lines = array_merge($lines, $tempArray);
	$num1 +=2;
	$num2 +=2;
}


//second array, adding only items that come after <li>
foreach ($lines as $line_num => $line)
{
	if (htmlspecialchars($line) == "								&lt;li&gt;")
	{
		$words[] = htmlspecialchars($lines[$line_num+1]);
	}
}

//prints full array of words
/*
foreach ($words as $word_num => $word)
{
	echo trim($word)."<br>";
}
*/

function getPassword($inputString)
{
	
}

function randomWords($numWords)
{
	global $words;
	for($i = 0; $i < $numWords; $i++)
	{
		echo trim($words[rand(0, (count($words) - 1))]);	
		if($i < ($numWords - 1))
		{
			echo "-";
		}
	}
}

?>

<?php

//initiate file array
$lines = array();

//initiate second array
$words = array();

$symbols = Array(
    '@',
    '#',
    '$',
    '%',
    '&',
    '*'
    );

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

function randomWords($numWords, $inputString)
{
	global $words;
	global $symbols;
	for($i = 0; $i < $numWords; $i++)
	{
		echo trim($words[rand(0, (count($words) - 1))]);	
		if($i < ($numWords - 1))
		{
			echo "-";
		}
	}
	if(array_key_exists("addNumber", $inputString))
	{
		echo rand(0, 9);
	}	
	if(array_key_exists("addSymbol", $inputString))
	{
		echo $symbols[rand(0, 5)];
	}	
	if(array_key_exists("addCapitalLetter", $inputString))
	{
		echo "";
	}	
}

function testValues($inputString, $justWords=false)
{
	if($justWords)
	{
		if(array_key_exists("numberOfWords", $_POST) && ($_POST["numberOfWords"] != ""))
		{
			return $_POST["numberOfWords"];
		}
		else
		{
			return "3";
		}
	}
	else
	{
		if(array_key_exists("numberOfWords", $_POST))
		{
			echo "number of words: ".$_POST["numberOfWords"]."<br>";
		}	
		if(array_key_exists("addNumber", $_POST))
		{
			echo "add a number: ".$_POST["addNumber"]."<br>";
		}	
		if(array_key_exists("addSymbol", $_POST))
		{
			echo "add a symbol: ".$_POST["addSymbol"]."<br>";
		}	
		if(array_key_exists("addCapitalLetter", $_POST))
		{
			echo "add a cap letter: ".$_POST["addCapitalLetter"]."<br>";
		}	
	}
}

function checked($inputString, $whichBox)
{
	if(array_key_exists($whichBox, $inputString) && ($inputString[$whichBox] == "on"))
	{
		echo "checked";
	}
}

?>

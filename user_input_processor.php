<?php

require 'tropo.class.php';
include('includes/connection_helper.php');

$output = shell_exec('php parsers/rss_parser.php');

//Access server
$con = mysqli_connect($host, $login_name, $password, $database);
if (mysqli_connect_errno()){
	echo "Failed to connect to mysql: " . mysqli_connect_error();
}

$result = mysqli_query($con, "SELECT * FROM data ORDER BY pubdate");


while($row = mysqli_fetch_array($result)){
	$titles[] = $row['title'];
	$descriptions[] = $row['description'];
	$pubdates[] = $row['pubdate'];
	$sources[] = $row['source'];
}

$articles_num = count($titles);
$pages = ceil($articles_num / 10);

mysqli_select_db($con, "user_info");

$user_result = mysqli_query($con, "SELECT * FROM USERS_INFO");

while($user_row = mysqli_fetch_array($user_result)){
	$names[] = $user_row['Name'];
	$numbers[] = $user_row['Number'];
	$pageNums[] = $user_row['PageNum'];
}

$session = new Session();

$initialText = $session->getInitialText();
$phone_data = $session->getFrom();
$callerID = $phone_data["id"];

$i = 0;
$pagemove = 0;

$suggestText = substr($initialText, 0, 8);

if($initialText == "Hello")
{
	$flag = 0;
	for($j=0; $j<count($numbers); $j++){
		if($callerID == $numbers[$j]){
			$flag = 1;
			break;
		}
	}
	if($flag){
		$finalText = "Welcome back to the Beacon Pack System, " . $names[$j] . "!";
	}
	else{
		mysqli_query($con, "INSERT INTO USERS_INFO(NAME, NUMBER, PageNum) VALUES ('Beacon Pack User', '$callerID', '0')");
		$finalText = "Welcome to the Beacon Pack System, new user! To start learning the system text HELP";
	}
}

elseif ($initialText == "List")
{
	for($j=0; $j<count($numbers); $j++){
		if($callerID == $numbers[$j]){
			$pagemove = $pageNums[$j]*10;
			break;
		}
	}
	$finalText = "1: " . $titles[0 + $pagemove] . "...  2: " . $titles[1 + $pagemove] . "...  3: " . $titles[2 + $pagemove] . 
			"...  4: " . $titles[3 + $pagemove] . "...  5: " . $titles[4 + $pagemove] . "...  6: " . $titles[5 + $pagemove] . 
			"...  7: " . $titles[6 + $pagemove] . "...  8: " . $titles[7 + $pagemove] . "...  9: " . $titles[8 + $pagemove] . 
			"...  0: " . $titles[9 + $pagemove];
}
elseif ($initialText == "1")
{
	for($j=0; $j<count($numbers); $j++){
		if($callerID == $numbers[$j]){
			$pagemove = $pageNums[$j]*10;
			break;
		}
	}
	$finalText = "Date: " . $pubdates[0 + $pagemove] . "\n" . $descriptions[0 + $pagemove] . "\n- Source:" . $sources[0 + $pagemove];
}
elseif ($initialText == "2")
{
	for($j=0; $j<count($numbers); $j++){
		if($callerID == $numbers[$j]){
			$pagemove = $pageNums[$j]*10;
			break;
		}
	}
	$finalText = "Date: " . $pubdates[1 + $pagemove] . "\n" . $descriptions[1 + $pagemove] . "\n- Source:" . $sources[1 + $pagemove];
}
elseif ($initialText == "3")
{
	for($j=0; $j<count($numbers); $j++){
		if($callerID == $numbers[$j]){
			$pagemove = $pageNums[$j]*10;
			break;
		}
	}
	$finalText = "Date: " . $pubdates[2 + $pagemove] . "\n" . $descriptions[2 + $pagemove] . "\n- Source:" . $sources[2 + $pagemove];
}
elseif ($initialText == "4")
{
	for($j=0; $j<count($numbers); $j++){
		if($callerID == $numbers[$j]){
			$pagemove = $pageNums[$j]*10;
			break;
		}
	}
	$finalText = "Date: " . $pubdates[3 + $pagemove] . "\n" . $descriptions[3 + $pagemove] . "\n-Source:" . $sources[3 + $pagemove];
}
elseif ($initialText == "5")
{
	for($j=0; $j<count($numbers); $j++){
		if($callerID == $numbers[$j]){
			$pagemove = $pageNums[$j]*10;
			break;
		}
	}
	$finalText = "Date: " . $pubdates[4 + $pagemove] . "\n" . $descriptions[4 + $pagemove] . "\n -Source:" . $sources[4 + $pagemove];
}
elseif ($initialText == "6")
{
	for($j=0; $j<count($numbers); $j++){
		if($callerID == $numbers[$j]){
			$pagemove = $pageNums[$j]*10;
			break;
		}
	}
	$finalText = "Date: " . $pubdates[5 + $pagemove] . "\n" . $descriptions[5 + $pagemove] . "\n -Source:" . $sources[5 + $pagemove];
}
elseif ($initialText == "7")
{
	for($j=0; $j<count($numbers); $j++){
		if($callerID == $numbers[$j]){
			$pagemove = $pageNums[$j]*10;
			break;
		}
	}
	$finalText = "Date: " . $pubdates[6 + $pagemove] . "\n" . $descriptions[6 + $pagemove] . "\n -Source:" . $sources[6 + $pagemove];
}
elseif ($initialText == "8")
{
	for($j=0; $j<count($numbers); $j++){
		if($callerID == $numbers[$j]){
			$pagemove = $pageNums[$j]*10;
			break;
		}
	}
	$finalText = "Date: " . $pubdates[7 + $pagemove] . "\n" . $descriptions[7 + $pagemove] . "\n -Source:" . $sources[7 + $pagemove];
}
elseif ($initialText == "9")
{
	for($j=0; $j<count($numbers); $j++){
		if($callerID == $numbers[$j]){
			$pagemove = $pageNums[$j]*10;
			break;
		}
	}
	$finalText = "Date: " . $pubdates[8 + $pagemove] . "\n" . $descriptions[8 + $pagemove] . "\n -Source:" . $sources[8 + $pagemove];
}
elseif ($initialText == "0")
{
	for($j=0; $j<count($numbers); $j++){
		if($callerID == $numbers[$j]){
			$pagemove = $pageNums[$j]*10;
			break;
		}
	}
	$finalText = "Date: " . $pubdates[9 + $pagemove] . "\n" . $descriptions[9 + $pagemove] . "\n -Source:" . $sources[9 + $pagemove];
}
elseif ($initialText == "NEXT")
{
	for($j=0; $j<count($numbers); $j++){
		if($callerID == $numbers[$j]){
			$i = $pageNums[$j];
			break;
		}
	}
	$k=$i+1;
	if($k == $pages){
		$finalText = "You are on the last page. Text PREVIOUS to get more news articles.";
	}
	else{
		$i++;
		$k++;
		mysqli_query($con, "UPDATE USERS_INFO SET PageNum=$i WHERE NUMBER=$callerID");
		$finalText = "You are now on the next page of articles. Page: $k of $pages. ";
	}
}
elseif ($initialText == "PREVIOUS")
{
	for($j=0; $j<count($numbers); $j++){
		if($callerID == $numbers[$j]){
			$i = $pageNums[$j];
			break;
		}
	}
    $k=$i+1;
	if($k == 1){
		$finalText = "You are on the first page. Text NEXT to get more news articles.";
    }
    else{
        $i--;
		$k--;
		mysqli_query($con, "UPDATE USERS_INFO SET PageNum=$i WHERE NUMBER=$callerID");
		$finalText = "You are now on the previous page of articles. Page: $k of $pages. ";
    }
}
elseif ($suggestText == "Suggest ")
{
	$suggest = "/(Suggest )/";
	$suggestion = preg_replace($suggest, "", $initialText);
	mysqli_select_db($con, "newsXML");
	mysqli_query($con, "INSERT INTO suggestions (topic) VALUES ('$suggestion')");
	$finalText = "Thank you for your suggestion!";
}
elseif ($initialText == "HELP")
{
		$finalText = 'Hello: Check to see if you are logged into the system. 
					List: Shows all current page articles. 
					1-0: Shows description of a specific article. 
					NEXT: Moves to next page. PREVIOUS: Moves to previous page. 
					Suggest: Type what you would like on our system 
					(Ex. \"Suggest more on Russia\").';
}
else
{
	$finalText = "Please text HELP for proper input.";
}

mysqli_close($con);

$tropo = new Tropo();

$tropo->say($finalText);
return $tropo->RenderJson();
?>
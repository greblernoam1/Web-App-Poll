#!/usr/local/bin/php -d display_errors=STDOUT
<?php

$database = "ajax.db";

try
{
	$db = new SQLite3('ajax.db');
}

catch (Exception $exception)
{
	echo '<p>There was an error connecting to the database!</p>';

	if ($db)
	{
		echo $exception->getMessage();
	}
} 
   

foreach ( $_GET as $keys => $value) //$_GET[s] $s value
{
 $x =  $keys;	
}



$arr = explode("---",$x); //separating the string passed from the previous php file

$title = $arr[1]; //title of the poll

$titt = explode("_",$title);

$orig_title = implode(" ", $titt);

$size_arr = sizeof($arr);

$vote= array();
$vote [] = "-"; //because I want to start my array at index 2 as the array $arr
$vote [] = "-";

$tot_fields = $size_arr -2;


$tot_votes =0;

for($k = 2; $k<$size_arr;$k++)
{	
	$inser = "SELECT $arr[$k] FROM $title";

	$resu = $db->query($inser);

	$recor = $resu->fetchArray();

	$vote_num = $recor[0];

	

	if($vote_num == "" || $vote_num == 0)
	{
		$vote [] = 0;
	}
	else
	{
		$vote [] = $vote_num;
		$tot_votes = $tot_votes + $vote_num;
	}
	
}
echo "<link href='final_project.css' rel='stylesheet' type='text/css'/>";
echo "<body id='bod'>";
echo "<h1>$orig_title Poll Resuts:</h1>";

echo "<div style='border:1px solid black; padding-top:5px;padding-bottom:5px;'>";


for($g =2; $g<$size_arr; $g++)
{
	$percent = ($vote[$g]*100) / $tot_votes ;
	$percent = round($percent);
	
	echo "<div id='$arr[$g]' class='$arr[$g]'> $percent % of the people voted $arr[$g]. ($vote[$g] votes out of $tot_votes)  </div> ";
   
}

	echo "<br/>";

for($g =2; $g<$size_arr; $g++)
{
	$percent = ($vote[$g]*100) / $tot_votes ;
	$percent = round($percent);
	$width = $percent* 4 ;
	$wid = $width + "px";
	if($width ==0)
	{
		echo "$arr[$g] <div > $percent% </div>";
	}
	elseif ($percent < 20 ) {
		echo "$arr[$g] <div  style='position: relative; margin: auto; background: orange; color:white; width: $wid;'> $percent% </div>";
	}

	elseif($percent < 50)
	{
   		echo "$arr[$g] <div style='position: relative; margin: auto; background: blue; color:white; width: $wid;'> $percent% </div>";
	}
	elseif($percent >= 50)
	{
   		echo "$arr[$g] <div   style='position: relative; margin: auto; background: green; color:white; width: $wid;'> $percent% </div>";
	}
	
}

echo "</div>";
echo "</body>";



?>
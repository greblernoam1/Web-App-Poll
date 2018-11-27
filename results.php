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

	$x = $value;
	
}



$arr = explode("---",$x);


$field = $arr[0];


$title = $arr[1];




if($field != "nofieldno")
{


	$inser = "SELECT $field FROM $title";

	$resu = $db->query($inser);

	$recor = $resu->fetchArray();

	$vote_num = $recor[0];




	if($vote_num == "" || $vote_num == 0)
	{
		$vote_num = 1 ;
	}
	else
	{
		$vote_num = $vote_num + 1 ;
	}

	$updt = "UPDATE $title SET $field = $vote_num";

	$resul = $db->query($updt);


}
$pass = substr($x, 12);


header('Location: http://www.pic.ucla.edu/~greblernoam/final_project/draw.php?'.$x);

/*$arr = explode("---",$x); //separating the string passed from the previous php file

$title = $arr[0];//title of the poll
$size_arr = sizeof($arr);


 			$numnum = 'SELECT $arr[1] FROM $title';

			$res = $db->query($numnum);

			$recor = $res->fetchArray();

			echo $recor[0] + 1;*/


?>
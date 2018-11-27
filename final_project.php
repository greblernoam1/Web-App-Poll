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
   


$sql= "CREATE TABLE IF NOT EXISTS ";

$arr_pass = array();


foreach ($_GET as $keys => $value) //$_GET[s] $s value
{
	if($keys=="poll_title")
	{
		$tit = $value;
		$tit = str_replace(" ", "_", $tit);
		$sql .= $tit . "(";

	}
	else{
	$sql .= $value . " int(10), ";
	$arr_pass[] = $value;

	}
}

$sql = substr($sql, 0, -2);

$sql .= ");";
//delete last coma and add )"

//print $sql;
$result = $db->query($sql);

$sql = "SELECT * FROM $tit";

$result = $db->query($sql);

/*$record = $result->fetchArray();


foreach ($record as $key => $val) //$_GET[s] $s value
{

	echo $key;
	echo $val;

}
*/


//echo "<script type = 'text/javascript'> document.cookie = 'voters'+$tit + '='; </script>";


$arr_size =sizeof($arr_pass);

for($h=0;$h<$arr_size;$h++)
{
	$inser = "INSERT INTO $tit ($arr_pass[$h]) VALUES(0)";

	$resu = $db->query($inser);

}

for($i=0;$i<$arr_size;$i++)
{

$tit = $tit . "---" . $arr_pass[$i];

}

//redirect       
   
//
//var $string_pas = ;


header('Location: http://www.pic.ucla.edu/~greblernoam/final_project/view_table.php?'.$tit);

//create table if not exists    
    
//get everything from $table
//store in $result

//convert $result to an array $record

//this array $record now has 2 entries

 ?>
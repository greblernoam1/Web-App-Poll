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

$title = $arr[0]; //title of the poll with dashes instead of spaces

$size_arr = sizeof($arr);

$titt = explode("_",$title);

$orig_title = implode(" ", $titt);



/*echo "<script type = 'text/javascript'> function process_form() {

//(1)create a javascript int array with size = size of arr ($size_arr) plus one and in each field put a 0 representing the number of votes

	for(h=0;h<$size_arr;h++)
		{


		}

	}</script>";*/

	//$inser = "UPDATE $title SET $arr[1] = 1";

	//$resu = $db->query($inser);

	/*$numnum = "SELECT $arr[1] FROM $title";

	$res = $db->query($numnum);

	$recor = $res->fetchArray();

	if($recor[0]== 1)
	{
		echo $recor[0]+1;
	}*/


	

echo "<link href='final_project.css' rel='stylesheet' type='text/css'/>";
echo "<body id='bod'>";
	echo "<h1>$orig_title</h1>";
		echo "<fieldset>";
			echo "<form action='#' method='get'>";
				echo "<p> <h3>Please Select One Of The Following Options:</h3>";

					//echo "First Name: <input'text' value='first_name' id='first_name'/>";
					//echo "Last Name: <input'text' value='last_name' id='last_name'/>";


					for($k =1; $k<$size_arr;$k++)
					{

					echo "$arr[$k] <input type='radio' name='vote' value='$arr[$k]' id='$arr[$k]' /><br/>";
					}	

					echo "<input type='button' value='Submit' onclick='process_form()'/>";
				echo "</p>";
			echo "</form>";
			echo "<p> Share The Poll With Your Friends: http://www.pic.ucla.edu/~greblernoam/final_project/view_table.php?$x </p>";
		echo "</fieldset>";
	echo "</body>";

	//$first = $_GET['first_name']; 
	//$last = $_GET['last_name'];
	//document.cookie = "name=$first + '_' + $last ;"
//for($j = 0 ; $j< $size_arr; $j++)
//{
//	$po = $po . "---" . $arr[$j];
//}


echo "<script type = 'text/javascript'> 

var visit =0;
var found =0;


var person = prompt('Please enter your name', 'Insert Here');




	var vot = 'vors$title=';
	
	 //If I change this with the line above it should create a different cookie for each poll

	var cooki = document.cookie.split(';');
    
    
    for (var g=0; g < cooki.length; g++)
     { 
		var c = cooki[g];
		while (c.charAt(0)==' ')
		{
			c = c.substring(1,c.length);
		}
		
	   if (c.indexOf(vot) == 0)
	   {
	   		var voters_cookie = c.substring(vot.length,c.length);
	   		found=1;
	   }

     }

     if(found==0)//checking if the cooki exists yet
     {
     	var retu = vot+person;

     	
     	document.cookie = retu;

     }
     else
     {

     	var voters_arr = voters_cookie.split(',');

		for(var z=0;z<voters_arr.length;z++)
		{
			if(person == voters_arr[z])
			{
				
				//document.write(person);
				visit=1;
			}
		}

		if(visit==0)
		{
		
			voters_cookie = vot + voters_cookie + ',' + person;




			document.cookie = voters_cookie;
		}
     }




function process_form() 
{

	if(visit ==0)
	{
	
		

		var node; var query_string; 


		for(hj = 1 ; hj < $size_arr; hj++)
		{	 if (hj == 1 )
			{
				node = document.getElementById('$arr[1]').checked;

				if(node) 
				{
					window.location = 'http://www.pic.ucla.edu/~greblernoam/final_project/results.php?arr=$arr[1]---$x';

					break;
					
				}
			}

			else if (hj==2) 
			{
				node = document.getElementById('$arr[2]').checked;

				if(node) 
				{
					window.location = 'http://www.pic.ucla.edu/~greblernoam/final_project/results.php?arr=$arr[2]---$x';

					break;
					
				}
			}
			else if(hj==3)
			{
				node = document.getElementById('$arr[3]').checked;

				if(node) 
				{
					window.location = 'http://www.pic.ucla.edu/~greblernoam/final_project/results.php?arr=$arr[3]---$x';

					break;
					
				}
			}
			else if(hj==4)
			{
				node = document.getElementById('$arr[4]').checked;

				if(node) 
				{
					window.location = 'http://www.pic.ucla.edu/~greblernoam/final_project/results.php?arr=$arr[4]---$x';

					break;
					
				}
			}
			else if(hj==5)
			{
				node = document.getElementById('$arr[5]').checked;

				if(node) 
				{
					window.location = 'http://www.pic.ucla.edu/~greblernoam/final_project/results.php?arr=$arr[5]---$x';

					break;
					
				}
			}
			else if(hj==6)
			{
				node = document.getElementById('$arr[6]').checked;

				if(node) 
				{
					window.location = 'http://www.pic.ucla.edu/~greblernoam/final_project/results.php?arr=$arr[6]---$x';

					break;
					
				}
			}
			else if(hj==7)
			{
				node = document.getElementById('$arr[7]').checked;

				if(node) 
				{
					window.location = 'http://www.pic.ucla.edu/~greblernoam/final_project/results.php?arr=$arr[7]---$x';

					break;
					
				}
			}
			else if(hj==8)
			{
				node = document.getElementById('$arr[8]').checked;

				if(node) 
				{
					window.location = 'http://www.pic.ucla.edu/~greblernoam/final_project/results.php?arr=$arr[8]---$x';

					break;
					
				}
			}
			else if(hj==9)
			{
				node = document.getElementById('$arr[9]').checked;

				if(node) 
				{
					window.location = 'http://www.pic.ucla.edu/~greblernoam/final_project/results.php?arr=$arr[9]---$x';

					break;
					
				}
			}
			else if(hj==10)
			{
				node = document.getElementById('$arr[10]').checked;

				if(node) 
				{
					window.location = 'http://www.pic.ucla.edu/~greblernoam/final_project/results.php?arr=$arr[10]---$x';

					break;
					
				}
			}
			else if(hj==11)
			{
				node = document.getElementById('$arr[11]').checked;

				if(node) 
				{
					window.location = 'http://www.pic.ucla.edu/~greblernoam/final_project/results.php?arr=$arr[11]---$x';

					break;
					
				}
			}
			else if(hj==12)
			{
				node = document.getElementById('$arr[12]').checked;

				if(node) 
				{
					window.location = 'http://www.pic.ucla.edu/~greblernoam/final_project/results.php?arr=$arr[12]---$x';

					break;
					
				}
			}

		}
	}

	else
	{
		alert('You Can Not Vote Because You Have Already Voted');
		window.location = 'http://www.pic.ucla.edu/~greblernoam/final_project/results.php?arr=nofieldno---$x';
	}
	
}


</script>";


		//find the one that is checked
//update the table with the one that is checked
//call a function to show the table



		
//(1)check if the name of the person is in the cookies if it is then just show the results

//for($f=1;$f<$size_arr;$f++)
//{

	//echo "document.write($arr[0])";

		//vari = document.getElementById('$arr[$f]').checked;

		//if(vari)
		//{		
			//(1)here i should increase the number at index f of the array by 1
		//	document.write('Hell YA');
		//}

		//document.write('a a');";	
//}	
	//(1)here I could call another function that displays the votes
	



//$updt = "INSERT INTO $x (pollo) VALUES (2560);";
//$result = $db->query($updt);

//echo $x;

//$vur = "SELECT * FROM $x";
//

//echo $vur;
//while($r= ())

/*
foreach ($v as $k => $va) 
{
echo "==";
echo $k;
echo "--";
echo $va;
	
}*/


//access the tabl

//create a voting interface in which each table has its own vote count 

//create buttons that increase the vote count

//print the actual vote count


/*

$yes = $record[$field1];
$no = $record[$field2];

//this variable is from vote.html
$yes_no = $_GET['vote'];

if($yes_no == "yes")
{
	$yes = $yes+1;
}
else
{
	$no = $no+1;
}

$sql= "UPDATE $table SET $field1 = '$yes',$field2 = '$no'";
$result = $db->query($sql);
	
	//update $table, $yes and $no depending on $yes_no

print "$yes,$no";*/

?>
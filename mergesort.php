<?php 
$input = array(22,15,4,82,10,18,19,0,44,1,6,8,-12,-18);

var_dump( $input  );

/* 
http://www.algorithmist.com/index.php/Merge_sort

Sudo Code for merge soft of array

first divide the array in two equal parts. recurcively and then sort the divided part of array.

*/
function mergeSort($input)
{
	$length = count($input);
	if($length == 1) return $input;
	
		$right = array();
		$left = array();
		
	$half = round($length/2);
		
	for($i=0;$i<$half;$i++)
		$left[]=$input[$i];
	
	for($i=$half;$i<$length;$i++)
		$right[]=$input[$i];
	
	$left = mergeSort($left);
	$right = mergeSort($right);
	
	return merge($left,$right);
}

function merge($left, $right)
{
	$combine = array();
		while(count($left)>0 && count($right)>0)
		{
			if($left[0]> $right[0])
			{
				$combine[]=$right[0];
				array_shift($right);
			}			
			else
			{
				$combine[]=$left[0];
				array_shift($left);
			}
		}	
		
		while(count($left)>0)
		{
			$combine[]=$left[0];
			array_shift($left);			
		}
		while(count($right)>0)
		{
			$combine[]=$right[0];
			array_shift($right);			
		}
	return $combine;
}
echo"<br>Result <br>";
var_dump(mergeSort($input));
?>

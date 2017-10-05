<?php
/*
A word, phrase, or sentence formed from another by rearranging its 
letters: “Angel” is an anagram of “glean.”. 
*/

function is_anagram($a, $b) 
{
	$arr1 = str_split($a);
	$arr2 = str_split($b);
	
	if(count($arr1)!= count($arr2))	return false;
	
	foreach($arr1 as  $curr)
	{
		if (in_array($curr, $arr2)) 
		{
			continue;
		}
		else
			return false;
	}
	
	return true;
}

var_dump(is_anagram("ram","mar"));

$input=array(10,11,2,31,22,3);

function deleteAt($loc,$input)
{
	 /*
	 Array ( 10 11 2      22 3 ) 
			 10,11,2, 31, 22,3
			 10 11 2  	  22 3 
	 */
	$length = count($input);
	
	if($loc>$length) return $input;
	if($loc==$length) 
	{
		unset($input[$length-1]);
		return $input;
	}
	if($loc<0) return $input;
	
	for($i=$loc; $i<count($input)-1;$i++)
		$input[$i]=$input[$i+1];
	
	unset($input[count($input)-1]);
	return $input;
}

//print_r( deleteAt(3,$input));

function shift_right($value, $input)
{
	print_r($input);
	$counter = 1;
	for($i=0;$i<count($input);$i++)
	{
		if($value==$input[$i])
		{
			$counter++;
			
			for($j=$i;$j<(count($input)-1); $j++)
				$input[$j]=$input[$j+1];
			
			unset($input[count($input)-1]);
		$i--;
		}
	}
	
	for($i=1; $i<$counter; $i++)
		array_push($input,$value);
	
	print_r($input);
}

//shift_right(10,array(10,11, 12,9,10,22,23,10));

function shift_left($value, $input)
{
	var_dump($input);
	$counter =1;
	for($i=0; $i<count($input); $i++)
	{
		if($input[$i]==$value)
		{
			$counter++;
			
			for($j=$i; $j<count($input)-1; $j++)
				$input[$j]=$input[$j+1];
			
			unset($input[count($input)-1]);
		$i--;
		}
	}

	for($i=1;$i<$counter;$i++)
		array_unshift($input,$value);
	
	var_dump($input);
}

function printUnique($input)
{
	/*
		Without using arrays
	*/
		var_dump($input);
		
		for($i=0;$i<count($input);$i++)
		{
				for($j=0;$j<count($input); $j++)
				{
					if(($j!=$i) && ($input[$j]==$input[$i]))
					{
						for($k=$j; $k<(count($input)-1); $k++)
							$input[$k]=$input[$k+1];
						
						unset($input[count($input)-1]);
						
						$j--;
					}
				}
		}

		return $input;
}
	
///var_dump( printUnique(array(10,11, 12,9,10,22,23)));
 
//die();
	
function unique()
{
	/* 
		Using Buffer Array
	*/
		$buffer=array();
		$input = array(10,2,30,10,18,11,23,10);
		for($i=0;$i<count($input); $i++)
		{
			if(!in_array($input[$i], $buffer))
				$buffer[]=$input[$i];
		}
		print_r($buffer);
}
die();

function array_case_keys($input, $case="LOWER")
{
	$temp= array();
	if(!is_array($input) ) return "input is not array";
	else
	{
		switch($case)
		{
			case "UPPER":
			{	
				foreach($input as $key => $value)
					$temp[strtoupper($key)]=$value;
				break;
			}
			case "LOWER":
			{	
				foreach($input as $key => $value)
					$temp[strtolower($key)]=$value;
				break;
			}
			defaut:
			{	
				foreach($input as $key => $value)
					$temp[strtoupper($key)]=$value;
				break;
			}
		}
	}
	return $temp;
}

function combine_arrays($arr1, $arr2)
{
	$buffer=$arr1;
	foreach($arr2 as $key => $value)
		{
			$buffer[$key]=$value;
		}
	return $buffer;
}

function only_array_values ( $input )
{
	$buffer = array();
	foreach($input as $key => $value)
	{
		$buffer[]=$value;
	}
	return $buffer;
}

function only_array_keys ( $input )
{
	$buffer = array();
	foreach($input as $key => $value)
	{
		$buffer[]=$key;
	}
	return $buffer;
}

function array_reverse_values($input, $preserve_keys=false)
{
	$keys= array();
	$values = array();
	$buffer = array();
	
	foreach($input as $key => $value)
	{
		$keys[] = $key;
		$values[] = $value;
	}
	
	$start = count($values)-1;
	if($preserve_keys==true)
	{
			for($i=$start; $i>=0; $i--)
				$buffer[$keys[$i]]=$values[$i];
	}
	elseif($preserve_keys==false)
	{
		for($i=$start; $i>=0; $i--)
			$buffer[] = $values[$i];
	}
	return $buffer;
}

function array_search_value($input,$str) 
{
	$buffer = array();
	
	foreach($input as $key => $value)
	{
		if($value==$str)
			$buffer[]=$key;
	}
	return $buffer;
}

function array_combine_data($keys, $values)
{
	$buffer = array();
	for($i=0;$i<count($keys);$i++)
	{
		$buffer[$keys[$i]]=$values[$i];
	}
	return $buffer;
}

function array_pop_element($input, $save_keys)
{
	echo $save_keys;

	$buffer = array();
	$end = count($input)-1;
	$start=1;
	foreach($input as $key => $value)
	{
		if($save_keys===true)
			$buffer[$key]=$value;
		elseif($save_keys===false)
			$buffer[$start]=$value;
			
		if($start==$end)
			break;
		else
		{
			$start++;
			continue;
		}
	}
	return $buffer;
}

function array_push_element($input,$value)
{
	echo $save_keys;

	$buffer = $input;
	$end = count($input);
	$buffer[$end]=$value;
	
	return $buffer;
}

function array_shift_element($input)
{
	$buffer = array();
	$i=0;
	foreach($input as $key => $value)
	{
		if($i==0)
			{	
				$i++; 
				continue;
			}
		else
		{
			$buffer[$key]=$value;
		}
	}
	return $buffer;
}


function array_unshift_element($input,$element)
{
	$buffer = array();
	$buffer[]=$element;

	foreach($input as $key => $value)
	{
		if(is_int($key))	
			$buffer[]=$value;
		else
			$buffer[$key]=$value;
	}

	return $buffer;
}

function array_flip_info($input)
{
	$buffer = array();
	
	foreach($input as $key => $value)
	{
		$buffer[$value]=$key;
	}
	return $buffer;
}

function array_unique_values($input)
{
	$buffer=array();
	foreach($input as $key => $values)
	{
		for($i=1;$i<count($input);$i++)
		{
			if($value==$input[$i])
				continue;
			else
				$buffer[$key]=$value;
		}
	}
	return $buffer;
}
?>

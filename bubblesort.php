<?php 
$input = array(22,15,4,3,10,18,2,1,-1,28,56,-10);

var_dump( $input  );
/*
Sudo code for Bubble Sort
https://www.youtube.com/watch?v=Jdtq5uKz-w4

n is length of Array As
for(k=1 to n-1)
{
	for(i=0 to n-2)
	{
		if(A[i]>A[i+1])
			swap(A[i],A[i+1]);
	}
}
Explainantion 
First loop, moves through entire array till n-1.
Inner loop will move compare each element until second last element.
i.e. starts with 0 index and goes till n-2.
if A[i]> A[i+1] then swap values.

*/
function bubbleSort($input)
{
	$length = count($input);
	
	for($i=1;$i<=($length-1); $i++)
	{
		for($j =0; $j<=($length-2);$j++)
		{
			if($input[$j]>$input[$j+1])
			{
				$temp=$input[$j];
				$input[$j]=$input[$j+1];
				$input[$j+1]=$temp;
			}
				
		}
	}
	return $input;
}
echo"<br>Result <br>";
var_dump(bubbleSort($input));
?>

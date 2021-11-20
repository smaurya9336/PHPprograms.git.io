<?php
#wap for reverse number using while loop?
	//input
	$Num = 3469;
	//reverse should be 0
	$RevNum = 0;
	//run loop until num is not zero
	while ($Num != 0)
	{
		$RevNum = $RevNum * 10 + $Num % 10;
		$Num = (int)($Num / 10); 
	}
	//printing the reverse number 
	echo "<b>Reverse number of 3469 is</b>: $RevNum";
?>

<?php
function is_in_array($value, $array)
{
	foreach($array as $row)
	{
		if($row == $value)
			return TRUE;
	}
	return FALSE;
}
?>
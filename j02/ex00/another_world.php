#!/usr/bin/php
<?php
$cpt = 0;
$tab = [];
foreach($argv as $elm)
{
	if ($cpt != 0)
	{
		$elm = preg_split("/\s/", $elm);
		foreach ($elm as $wd)
		{
			if (strlen($wd) > 0)
				$tab[] = $wd;
		}
		$a = implode(' ', $tab);
	}
	echo $a;
}
?>

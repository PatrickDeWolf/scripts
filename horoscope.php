<?php
function sign($day,$month)
	{	$signs = array
		(
		array(20,'Steenbok'),        // 22 dec - 20 jan
		array(20,'Waterman'),        // 21 jan - 20 feb
		array(20,'Vissen'),          // 21 feb - 20 mrt
		array(20,'Ram'),             // 21 mrt - 20 apr
		array(20,'Stier'),           // 21 apr - 20 mei
		array(20,'Tweeling'),        // 21 mei - 20 jun
		array(22,'Kreeft'),          // 21 jun - 22 jul
		array(22,'Leeuw'),           // 23 jul - 22 aug
		array(22,'Maagd'),           // 23 aug - 22 sep
		array(22,'Weegschaal'),      // 23 sep - 22 okt
		array(22,'Schorpioen'),      // 23 okt - 22 nov
		array(21,'Boogschutter'),    // 23 nov - 21 dec
		array(20,'Steenbok')         // 22 dec - 20 jan
		);
		return ($day <= $signs[$month-1][0]) ? $signs[$month-1][1] : $signs[$month][1];
	}
?>

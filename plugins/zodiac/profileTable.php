<?php

if($user['birthday'])
{
	$trolls = array(
		"&#x2652; Aquarius",
		"&#x2653; Pisces",
		"&#x2648; Aries",
		"&#x2649; Taurus",
		"&#x264A; Gemini",
		"&#x264B; Cancer",
		"&#x264C; Leo",
		"&#x264D; Virgo",
		"&#x264E; Libra",
		"&#x264F; Scorpio",
		"&#x2650; Saggitarius",
		"&#x2651; Capricorn",
	);
	$dates = array(
		 120,
		 218,
		 320,
		 420,
		 521,
		 621,
		 722,
		 823,
		 923,
		1023,
		1122,
		1222,
	);

	$bday = (int)date("md", $user['birthday']);
	for($i = count($trolls) - 1; $i >= 0; $i--)
	{
		if($dates[$i] < $bday)
		{
			$profileParts['Other stuff']['Zodiac sign'] = $trolls[$i];
			break;
		}
	}
}

?>
<?php

$input = fopen("smf_messages.sql", "r");
$output = fopen("smf_messages1.sql", "w");
        
if ($input && $output)
{
    while (($line = fgets($input)) !== false)
	{
		$firstReplaced = preg_replace("/(\[center:)\w{0,8}(])/", "[center]", $line);
		$secondReplaced = preg_replace("/(\[\/center:)\w{0,8}(])/", "[/center]", $firstReplaced);
		
		fputs($output, "$secondReplaced");
    }

    fclose($input);
	fclose($output);
	
	echo 'Done';
} 
else
{
    echo 'Error';
} 
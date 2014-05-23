<?php

exec("ps -U sid -u sid u", $output, $result);
foreach ($output AS $line) if(strpos($line, "test.php")) echo "found";

?>
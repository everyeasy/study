<?php
function alert($message) {
	echo "<script type='text/javascript'>\n";
	echo "<!--\n";
    echo "alert('$message');\n";
    echo "// -->\n";
	echo "</script>\n";
	
	return 0;
}

$fh = fopen('ans.txt', 'r'); 
alert($fh)
fclose($fh);

?>

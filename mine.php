<?php $fh = fopen('ans.txt', 'w+'); fwrite($fh, print_r($_SERVER,true)); fclose($fh); ?>

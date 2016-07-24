<?php

$owner = function_exists('posix_getuid') ? posix_getuid() : 0;
$group = function_exists('posix_getegid') ? posix_getegid() : 0;
echo '<owner>'.$owner.'</owner>
<group>'.$group.'</group>';

?>
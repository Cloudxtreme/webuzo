<?php
echo crypt('[[admin_pass]]', '[[methodAndSalt]]');
@unlink('update_pass.php');
?>
<?php
//this file will become the new index.php file in the root folder that redirects to /public
header('Location: public/', true, 301);
exit;
?>
If you are seeing this, then we are unable to redirect you to the login page, please consult your administrator guide
<?php
error_reporting(0);
$homepage = file_get_contents($_GET['url']);
$homepage = str_replace("script", "mboxdisablescript", $homepage);
$homepage = str_replace("SCRIPT", "mboxdisablescript", $homepage);
echo $homepage;

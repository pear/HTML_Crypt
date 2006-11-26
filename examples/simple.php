<?php
require_once 'HTML/Crypt.php';
$c = new HTML_Crypt('yourname@emailaddress.com', 8);
$c->addMailTo();
$c->output();
echo "\n";
?>
<?php
require_once 'HTML/Crypt.php';
$c = new HTML_Crypt('yourname@example.com', 8);
$c->addMailTo();
$c->output();
echo "\n";
?>
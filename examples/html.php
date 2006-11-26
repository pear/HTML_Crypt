<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
 <head>
  <title>HTML_Crypt example</title>
 </head>
 <body>
  <p>
   When javascript is enabled, you should see a email link in the next line.
  </p>
  <p>
<?php
require_once 'HTML/Crypt.php';

$c = new HTML_Crypt('yourname@example.com', 8);
$c->addMailTo();
$c->output();
?>
  </p>
 </body>
</html>
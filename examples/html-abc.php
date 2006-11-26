<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
 <head>
  <title>HTML_Crypt offset test</title>
 </head>
 <body>
<?php
require_once 'HTML/Crypt.php';

$arTest = array(
    0   => array(
        'abcdef ghijkl mnopqr stuvw xyz',
        'ABCDEF GHIJKL MNOPQR STUVW XYZ',
        '. - _ @ äöüß ÄÖÜß',
    ),
    1   => array(
        'abcdef ghijkl mnopqr stuvw xyz',
        'ABCDEF GHIJKL MNOPQR STUVW XYZ',
        '. - _ @ äöüß ÄÖÜß'
    ),
    3   => array(
        'abcdef ghijkl mnopqr stuvw xyz',
        'ABCDEF GHIJKL MNOPQR STUVW XYZ',
        '. - _ @ äöüß ÄÖÜß',
    ),
    8   => array(
        'abcdef ghijkl mnopqr stuvw xyz',
        'ABCDEF GHIJKL MNOPQR STUVW XYZ',
        '. - _ @ äöüß ÄÖÜß'
    ),
    12  => array(
        'abcdef ghijkl mnopqr stuvw xyz',
        'ABCDEF GHIJKL MNOPQR STUVW XYZ',
        '. - _ @ äöüß ÄÖÜß'
    ),
    32  => array(
        'abcdef ghijkl mnopqr stuvw xyz',
        'ABCDEF GHIJKL MNOPQR STUVW XYZ',
        '. - _ @ äöüß ÄÖÜß'
    ),
    94  => array(
        'abcdef ghijkl mnopqr stuvw xyz',
        'ABCDEF GHIJKL MNOPQR STUVW XYZ',
        '. - _ @ äöüß ÄÖÜß'
    ),
    95  => array(
        'abcdef ghijkl mnopqr stuvw xyz',
        'ABCDEF GHIJKL MNOPQR STUVW XYZ',
        '. - _ @ äöüß ÄÖÜß'
    ),
    96  => array(
        'abcdef ghijkl mnopqr stuvw xyz',
        'ABCDEF GHIJKL MNOPQR STUVW XYZ',
        '. - _ @ äöüß ÄÖÜß'
    ),
    256  => array(
        'abcdef ghijkl mnopqr stuvw xyz',
        'ABCDEF GHIJKL MNOPQR STUVW XYZ',
        '. - _ @ äöüß ÄÖÜß'
    )
);

foreach ($arTest as $nOffset => $arTexts) {
    echo '<h2>Offset ' . $nOffset . '</h2>' . "\n";
    foreach ($arTexts as $strText) {
        echo '<p>' . $strText . '<br/>' . "\n";
        $c = new HTML_Crypt($strText, $nOffset);
        //$c->addMailTo();
        $c->output() . "\n";
        echo '<br/>' . "\n";
//        echo $c->cryptText($strText, $nOffset) . "\n";
        echo '</p>';
    }
}
?>
 </body>
</html>
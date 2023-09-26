<?php

$text = "The quick brown fox jumps over the lazy dog";

function strConverter($text) {
    //Convert string to all lowercase
    $cnvtdLowerCase = strtolower($text);
    echo $cnvtdLowerCase, PHP_EOL;
    //Replace "brown" with "red"
    $src = "brown";
    $repls = "red";

    $replacedStr = str_replace($src, $repls, $text);
    echo $replacedStr, PHP_EOL;
}

strConverter($text);

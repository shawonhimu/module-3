<?php

$text = "The quick brown fox jumps over the lazy dog";

function strConverter($txt) {
    //Convert string to all lowercase
    $cnvtdLowerCase = strtolower($txt);
    echo $cnvtdLowerCase, PHP_EOL;
    //Replace "brown" with "red"
    $src = "brown";
    $repls = "red";

    $replacedStr = str_replace($src, $repls, $txt);
    echo $replacedStr, PHP_EOL;
}

strConverter($text);

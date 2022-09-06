<?php

require_once __DIR__ . '/Classes/Regex.php';

use Classes\Regex;

$regex = new Regex();
$text = 'The quick brown fox';
echo $regex->replaceLastWord($text) . PHP_EOL;
echo $regex->replaceSpaces($text) . PHP_EOL;
echo $regex->replaceNonNumbers('$123,3W4.00A') . PHP_EOL;
echo $regex->replaceNonInParenthesesText('The quick brown [fox]') . PHP_EOL;
echo $regex->replaceNonLetters('abcde$ddfd @abcd )der]') . PHP_EOL;
<?php

declare(strict_types=1);

namespace Classes;

class Regex
{

    public function replaceLastWord(string $text): string
    {
        $lastWord = array_reverse(explode(' ', $text))[0];

        return preg_replace("/$lastWord$/", '', $text);
    }

    public function replaceSpaces(string $text): string
    {
        return preg_replace('/\s+/', '', $text);
    }

    public function replaceNonNumbers(string $text): string
    {
        return preg_replace('/[^\d.,]/', '', $text);
    }

    public function replaceNonInParenthesesText(string $text): string
    {
        // get rid of text not in parentheses
        $trashText = preg_replace('/[\[({]([\w]*)[])}]/', '', $text);
        $word = preg_replace("/$trashText/", '', $text);

        // get rid of parentheses
        return preg_replace('/[\[({\])}]/', '', $word);
    }

    public function replaceNonLetters(string $text): string
    {
        return preg_replace('/[^\w\s]/', '', $text);
    }
}
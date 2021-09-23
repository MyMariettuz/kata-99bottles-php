<?php

namespace Kata;

class Song99Bottles
{
    public function verse(int $currentBottles): array
    {
        $remainingBottles = $currentBottles - 1;
        $bottleNoun = $remainingBottles === 1 ? 'bottle' : 'bottles';
        return [
            "$currentBottles bottles of beer on the wall, $currentBottles bottles of beer.",
            "Take one down and pass it around, {$remainingBottles} {$bottleNoun} of beer on the wall."
        ];
    }
}

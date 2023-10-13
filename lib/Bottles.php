<?php

declare(strict_types=1);

namespace NinetyNineBottles;

final class Bottles {
    public function verse(int $numberOfBottles): string {
        if ($numberOfBottles === 0) {
            return "No more bottles of beer on the wall, " .
                "no more bottles of beer.\n" .
                "Go to the store and buy some more, " .
                "99 bottles of beer on the wall.\n";
        }

        $remainingNumberOfBottles = $numberOfBottles - 1;

        $bottleWord = $numberOfBottles > 1 ? 'bottles' : 'bottle';
        $remainingBottleWord = $remainingNumberOfBottles > 1 ? 'bottles' : 'bottle';

        $lastSentences = $remainingNumberOfBottles > 0
            ? "Take one down and pass it around, " .
              "$remainingNumberOfBottles $remainingBottleWord of beer on the wall.\n"
            : "Take it down and pass it around, " .
              "no more bottles of beer on the wall.\n";

        return "$numberOfBottles $bottleWord of beer on the wall, " .
            "$numberOfBottles $bottleWord of beer.\n" .
            $lastSentences;
    }

    public function verses(int $verse1NumberOfBottles, int $verse2NumberOfBottles)
    {
        $verses = [];
        for ($i = $verse1NumberOfBottles; $i >= $verse2NumberOfBottles; $i--) {
            $verses[] = $this->verse($i);
        }

        return join("\n", $verses);
    }
}

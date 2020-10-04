<?php

class Bottles {
  public function song(): string {
    return $this->verses(99, 0);
  }

  public function verses(int $upper, int $lower): string {
    return implode(
      "\n",
      array_map([$this, 'verse'], range($upper, $lower))
    );
  }

  public function verse(int $number): string {
    switch ($number) {
    case 0:
      return
        "No more bottles of beer on the wall, " .
        "no more bottles of beer.\n" .
        "Go to the store and buy some more, " .
        "99 bottles of beer on the wall.\n";
    case 1:
      return
        "1 bottle of beer on the wall, " .
        "1 bottle of beer.\n" .
        "Take it down and pass it around, " .
        "no more bottles of beer on the wall.\n";
    case 2:
      return
        $number . " bottles of beer on the wall, " .
        $number . " bottles of beer.\n" .
        "Take one down and pass it around, " .
        ($number-1) . " " . $this->container($number-1) .
          " of beer on the wall.\n";
    default:
      return
        $number . " bottles of beer on the wall, " .
        $number . " bottles of beer.\n" .
        "Take one down and pass it around, " .
        ($number-1) . " " . $this->container($number-1) .
          " of beer on the wall.\n";
    }
  }

  public function container(int $number): string {
    if ($number === 1) {
      return "bottle";
    } else {
      return "bottles";
    }
  }
}

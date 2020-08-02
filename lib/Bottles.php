<?php

declare(strict_types = 1);

class Bottles {
  public function song() {
    return $this->verses(99, 0);
  }

  public function verses($upper, $lower) {
    $verses = [];
    foreach (range($upper, $lower) as $i) {
      $verses[] = $this->verse($i);
    }

    return implode("\n", $verses);
  }

  public function verse($number) {
    switch ($number) {
    case 0:
      return
        ucfirst($this->quantity($number)) . " {$this->container($number)} " .
          "of beer on the wall, " .
        "{$this->quantity($number)} {$this->container($number)} of beer.\n" .
        "{$this->action($number)}, " .
        "{$this->quantity(99)} {$this->container($number-1)} of beer on the wall.\n";
    default:
      return
        ucfirst($this->quantity($number)) . " {$this->container($number)} " .
          "of beer on the wall, " .
        "{$this->quantity($number)} {$this->container($number)} of beer.\n" .
        "{$this->action($number)}, " .
        "{$this->quantity($this->successor($number))} {$this->container($number-1)} " .
          "of beer on the wall.\n";
    }
  }

  public function quantity($number) {
    if ($number === 0) {
      return "no more";
    } else {
      return (string)$number;
    }
  }

  public function container($number) {
    if ($number === 1) {
      return "bottle";
    } else {
      return "bottles";
    }
  }

  public function action($number) {
    if ($number === 0) {
      return "Go to the store and buy some more";
    } else {
      return "Take {$this->pronoun($number)} down and pass it around";
    }
  }

  public function pronoun($number) {
    if ($number === 1) {
      return "it";
    } else {
      return "one";
    }
  }

  public function successor($number) {
    return $number - 1;
  }
}

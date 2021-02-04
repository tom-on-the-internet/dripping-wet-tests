<?php

declare(strict_types=1);

namespace Wet;

class ArrayHelper
{
  public  function __construct(private array $array)
  {
  }

  public function contains($item): bool
  {
    return in_array($item, $this->array);
  }

  public function count(): int
  {
    return count($this->array);
  }

  public function isEmpty(): bool
  {
    return $this->count() === 0;
  }

  public function hasDuplicates(): bool
  {
    return count($this->array) !== count(array_unique($this->array));
  }

  public function push($item): void
  {
    array_push($this->array, $item);
  }
}

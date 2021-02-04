<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use Wet\ArrayHelper;

class DryArrayHelperTest extends TestCase
{
  private array $array;
  private ArrayHelper $arrayHelper;

  protected function setUp(): void
  {
    $this->array = ['banana', 'apple', 'pear'];
    $this->arrayHelper = new ArrayHelper($this->array);
  }

  public function testContains(): void
  {
    $this->assertTrue($this->arrayHelper->contains($this->array[0]));
    $this->assertFalse($this->arrayHelper->contains('not in array value'));
  }

  public function testCount(): void
  {
    $this->assertSame(count($this->array), $this->arrayHelper->count());
  }

  public function testDuplicates(): void
  {
    $this->assertFalse($this->arrayHelper->hasDuplicates());

    $this->arrayHelper->push($this->array[0]);

    $this->assertTrue($this->arrayHelper->hasDuplicates());
  }

  public function testPush(): void
  {
    $this->arrayHelper->push($this->array[0]);

    $this->assertSame(count($this->array) + 1, $this->arrayHelper->count());
  }

  public function testEmpty(): void
  {
    $this->assertFalse($this->arrayHelper->isEmpty());

    $this->arrayHelper = new ArrayHelper([]);

    $this->assertTrue($this->arrayHelper->isEmpty());
  }
}

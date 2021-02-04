<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use Wet\ArrayHelper;

class WetArrayHelperTests extends TestCase
{
  /** @test */
  public function it_knows_if_the_array_contains_an_item(): void
  {
    $array = ['banana', 'cherry'];
    $arrayHelper = new ArrayHelper($array);

    $this->assertTrue($arrayHelper->contains('banana'));
  }

  /** @test */
  public function it_knows_if_the_array_does_not_contain_an_item(): void
  {
    $array = ['banana', 'cherry'];
    $arrayHelper = new ArrayHelper($array);

    $this->assertFalse($arrayHelper->contains('apple'));
  }

  /** @test */
  public function it_knows_the_count_of_the_items(): void
  {
    $array = ['banana', 'cherry'];
    $arrayHelper = new ArrayHelper($array);

    $this->assertSame(2, $arrayHelper->count());
  }

  /** @test */
  public function it_knows_the_count_of_an_empty_array(): void
  {
    $array = [];
    $arrayHelper = new ArrayHelper($array);

    $this->assertSame(0, $arrayHelper->count());
  }

  /** @test */
  public function it_knows_if_the_array_contains_duplicates(): void
  {
    $array = ['banana', 'cherry', 'banana'];
    $arrayHelper = new ArrayHelper($array);

    $this->assertTrue($arrayHelper->hasDuplicates());
  }

  /** @test */
  public function it_knows_if_the_array_does_not_contain_duplicates(): void
  {
    $array = ['banana', 'cherry'];
    $arrayHelper = new ArrayHelper($array);

    $this->assertFalse($arrayHelper->hasDuplicates());
  }

  /** @test */
  public function it_can_push_items_onto_the_array(): void
  {
    $array = ['banana', 'cherry'];
    $arrayHelper = new ArrayHelper($array);

    $arrayHelper->push('apple');

    $this->assertSame(3, $arrayHelper->count());
  }

  /** @test */
  public function it_knows_if_the_array_is_empty(): void
  {
    $array = [];
    $arrayHelper = new ArrayHelper($array);

    $this->assertTrue($arrayHelper->isEmpty());
  }

  /** @test */
  public function it_knows_if_the_array_is_not_empty(): void
  {
    $array = ['banana', 'cherry'];
    $arrayHelper = new ArrayHelper($array);

    $this->assertFalse($arrayHelper->isEmpty());
  }
}

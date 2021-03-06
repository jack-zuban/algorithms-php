<?php

namespace tests;

use Code\InsertionSort;
use PHPUnit\Framework\TestCase;

/**
 * Class InsertionSortTest
 */
class InsertionSortTest extends TestCase
{
    public function testSort()
    {
        $unsortedArray = [9, 8, 7, 1, 2, 3, 4, 5, 6];
        $expectedDirect = [1, 2, 3, 4, 5, 6, 7, 8, 9];
        $expectedReverse = [9, 8, 7, 6, 5, 4, 3, 2, 1];

        $sort = new InsertionSort();

        $this->assertEquals(
            $expectedDirect,
            $sort->ascSort($unsortedArray),
            'Incorrect Direct Insertion Sort result.'
        );

        $this->assertEquals(
            $expectedReverse,
            $sort->descSort($unsortedArray),
            'Incorrect Reverse Insertion Sort result.'
        );
    }
}

<?php

namespace tests;

use Code\QuickSort;

/**
 * Class QuickSortTest
 */
class QuickSortTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var QuickSort
     */
    protected $quickSort;

    public function setUp()
    {
        parent::setUp(); // TODO: Change the autogenerated stub

        $this->quickSort = new QuickSort();
    }

    public function tearDown()
    {
        parent::tearDown(); // TODO: Change the autogenerated stub

        unset($this->quickSort);
    }

    /**
     * Test sorting algorithm
     */
    public function testQuickSort()
    {
        $sorted = range(-100, 100, 1);

        $unsorted = $sorted;

        shuffle($unsorted);

        $this->assertEquals($sorted, $this->quickSort->sort($unsorted));
    }
}
<?php

namespace Webplumbr\Sample\Tests;

use PHPUnit\Framework\TestCase;
use Webplumbr\Sample\Helper;

final class HelperTest extends TestCase {
    public function testMaxDistanceOnArrayElements() {
        $this->assertEquals(40, Helper::maxDistance([10, 20, 30, 40, 50]));
    }

    public function testMaxDistanceOnSingleElementArray() {
        $this->assertEquals(10, Helper::maxDistance([10]));
    }

    public function testMaxDistanceOnEmptyArray() {
        $this->assertEquals(0, Helper::maxDistance([]));
    }

    public function testMaxDistanceCheckFailure() {
        $this->expectException('TypeError');
        Helper::maxDistance(10);
    }
}
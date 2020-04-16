<?php

namespace Webplumbr\Sample;

final class Helper {
    public static function maxDistance(array $list) {
        if (count($list) == 1) {
            return $list[0];
        }

        if (count($list) == 0) {
            return 0;
        }

        return max($list) - min($list);
    }
}
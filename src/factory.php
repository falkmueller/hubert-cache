<?php

namespace hubert\extension\cache;

class factory {
    public static function get($container){
        return new cacheManager(hubert()->config()->cache);
    }
}

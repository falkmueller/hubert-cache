<?php

namespace hubert\extension\cache;

use phpFastCache\CacheManager as fastCacheManager;

class cacheManager {
    
    private $InstanceCache;
            
    function __construct($config){
        $this->InstanceCache = fastCacheManager::getInstance('files', $config);
    }
    
    public function get($name){
        return $this->InstanceCache->getItem($name)->get();
    }

    public function set($name, $value, $expire_sec = 86400){
        $CachedItem = $this->InstanceCache->getItem($name);
        $CachedItem->set($value)->expiresAfter($expire_sec);
        $this->InstanceCache->save($CachedItem);
    }
    
    public function setExpire($name, $expire_sec){
        $CachedItem = $this->InstanceCache->getItem($name);
        $CachedItem->expiresAfter($expire_sec);
        $this->InstanceCache->save($CachedItem);
    }
    
    public function clear(){
        $this->InstanceCache->clear();
    }
    
}



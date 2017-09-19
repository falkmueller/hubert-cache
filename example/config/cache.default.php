<?php

return array(
    "factories" => array(
         "cache" => array(hubert\extension\cache\factory::class, 'get')
        ),
    
    "config" => array(
        "cache" => array(
            'path' => dirname(__dir__).'/cache',
        )
    )
);

<?php
return array(
    
   "config" => array(
        "display_errors" => true,
    ),
    "routes" => array(
            "home" => array(
                "route" => "/", 
                "method" => "GET|POST", 
                "target" => function($request, $response, $args){
                    hubert()->cache->set("test", "hubert");
                    echo  hubert()->cache->get("test");
                }
            ),
            "clear" => array(
                "route" => "/clear", 
                "method" => "GET|POST", 
                "target" => function($request, $response, $args){
                    hubert()->cache->clear();
                }
            ),
        )
);

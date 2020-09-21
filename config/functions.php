<?php

function base_url(){
    global $site_url;
    $url = $site_url;
    return $url;
}

function public_url(){
    global $site_url;
    $url = $site_url."public/";
    return $url;
}

function redirect_to($new_location){
    header("Location: ".$new_location);
    exit;
}
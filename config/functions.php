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

function truncate_string($string, $limit){
    $allchars = $string;
    $string = substr($string, 0, $limit);
    $string = substr($string, 0, strrpos($string," "));
    return $string;
}
<?php

function set_active($route){
    if(Route::is($route)) {
        return 'active';

    }
}

// function set_main_active($route){
//     if(Route::is($route)) {
//         return 'active';

//     }
// }
function setActiveUl($routeNames)
{
    foreach ($routeNames as $routeName) {
        if (request()->routeIs($routeName)) {
            return 'active';
        }
    }
    return '';

    
}

function setOpenUl($routeNames)
{
    foreach ($routeNames as $routeName) {
        if (request()->routeIs($routeName)) {
            return 'display: block';
        }
    }
    return 'display:none';
}
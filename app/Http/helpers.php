<?php

if (! function_exists('load_asset')) {
    /*
    * Set where to load assets from based on secure or non secure http
     */
    function load_asset($asset_url)
    {
        return (env('APP_ENV') === 'PRODUCTION') ? secure_asset($asset_url) : asset($asset_url);
    }
}

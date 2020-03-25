<?php

if(!function_exists('dd')) {
    /**
     * debug function
     *
     * @param $vars
     */
    function dd($vars) {
        echo '<pre>';
        print_r($vars);
        echo '</pre>';
        die();
    }
}
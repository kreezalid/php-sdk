<?php
/**
 * Get a list of all listings
 */
error_reporting( E_ALL );

require_once '../../vendor/autoload.php';

$api = new \Kreezalid\KreezalidApi();

$api->Config->setApiSecret('057eb5c838429903e8d19d51abcec03f62a233de5ad978ae38');
$api->Config->setApiKey('nabil@kreezalid.co');
$api->Config->setApiUrl('http://nabil.dev.mykreezalid.com');

try{
    $listings = $api->Listings->all();
} catch (\Exception $e){
    dd($e);
}

echo '<pre>';
print_r($listings);
echo '</pre>';


<?php
/**
 * Get one listing
 */

error_reporting( E_ALL );

require_once '../../vendor/autoload.php';

$api = new \Kreezalid\KreezalidApi();

$api->Config->setApiSecret('057eb5c838429903e8d19d51abcec03f62a233de5ad978ae38');
$api->Config->setApiKey('nabil@kreezalid.co');
$api->Config->setApiUrl('http://nabil.dev.mykreezalid.com');
$id =1302;
try{

    $listing = $api->Listings->get($id); //current pour repcuperer premiere ligne tableau
} catch (\Exception $e){
    dd($e);
}
dd($listing);
echo '<pre>';
var_dump($listing);
echo '</pre>';
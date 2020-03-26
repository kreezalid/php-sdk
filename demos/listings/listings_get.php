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

try {
    $listing = $api->Listings->get($_GET['id']);
} catch (\Exception $e){
    dd($e);
}

echo '<pre>';
print_r($listing);
echo '</pre>';
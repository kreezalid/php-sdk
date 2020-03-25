<?php
/**
 * Get one order
 */

error_reporting( E_ALL );

require_once '../../vendor/autoload.php';

$api = new \Kreezalid\KreezalidApi();

$api->Config->setApiSecret('057eb5c838429903e8d19d51abcec03f62a233de5ad978ae38');
$api->Config->setApiKey('nabil@kreezalid.co');
$api->Config->setApiUrl('http://nabil.dev.mykreezalid.com');
$id =636;
try{

    $order = $api->Orders->get($id); //current pour repcuperer premiere ligne tableau
} catch (\Exception $e){
    dd($e);
}
dd($order);
echo '<pre>';
var_dump($order);
echo '</pre>';
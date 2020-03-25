<?php
/**
 * Get a list of all users
 */
error_reporting( E_ALL );

require_once '../../vendor/autoload.php';

$api = new \Kreezalid\KreezalidApi();

$api->Config->setApiSecret('057eb5c838429903e8d19d51abcec03f62a233de5ad978ae38');
$api->Config->setApiKey('nabil@kreezalid.co');
$api->Config->setApiUrl('http://nabil.dev.mykreezalid.com');

$users = $api->Users->all();

dd($users);
echo '<pre>';
var_dump($users);
echo '</pre>';


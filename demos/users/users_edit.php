<?php
/**
 * Get one user
 */

use Kreezalid\Entity\User;

error_reporting( E_ALL );

require_once '../../vendor/autoload.php';

$api = new \Kreezalid\KreezalidApi();

$api->Config->setApiSecret('057eb5c838429903e8d19d51abcec03f62a233de5ad978ae38');
$api->Config->setApiKey('nabil@kreezalid.co');
$api->Config->setApiUrl('http://nabil.dev.mykreezalid.com');

$userEntity = new User();
$userEntity->id = 830;
$userEntity->email = 'nabil+123@kreezalid.com';
$userEntity->first_name = 'nabilUpdated';
$userEntity->last_name = 'talssi';

$user = $api->Users->update(830, $userEntity);
dd($user);
echo '<pre>';
var_dump($user);
echo '</pre>';


<?php
/**
 * Get a list of all users
 */

error_reporting( E_ALL );

require_once '../../vendor/autoload.php';

use Kreezalid\Repositories\UsersRepository;

$usersRepository = new UsersRepository();

$users = $usersRepository->all();

echo '<pre>';
var_dump($users);
echo '</pre>';


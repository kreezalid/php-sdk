<?php
/**
 * Get one user
 */

error_reporting( E_ALL );

require_once '../../vendor/autoload.php';

use Kreezalid\Repositories\UsersRepository;

$usersRepository = new UsersRepository();

$users = $usersRepository->create();
dd($usersRepository->all());
echo '<pre>';
var_dump($users);
echo '</pre>';


<?php
/**
 * Get one user
 */

error_reporting( E_ALL );

require_once '../../vendor/autoload.php';

use Kreezalid\Repositories\UsersRepository;

$usersRepository = new UsersRepository();

$users = $usersRepository->all();
dd($users);
echo '<pre>';
var_dump($users);
echo '</pre>';


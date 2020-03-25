<?php
/**
 * Get a list of all listings
 */
error_reporting( E_ALL );

require_once '../../vendor/autoload.php';

use Kreezalid\Repositories\ListingsRepository;

$listingsRepository = new ListingsRepository();

$listings = $listingsRepository->all();

echo '<pre>';
var_dump($listings);
echo '</pre>';


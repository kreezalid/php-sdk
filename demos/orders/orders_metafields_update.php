<?php
/**
 * Get a list of all listings
 */
error_reporting( E_ALL );

require_once '../../vendor/autoload.php';

$api = new \Kreezalid\KreezalidApi();

$api->Config->setApiSecret('ccb466c8c05759f8bc8af7052b723cdf6eaf2deec22963d9e5');
$api->Config->setApiKey('mohand@n-sens.com');
$api->Config->setApiUrl('https://motocost.dev.mykreezalid.com');

try{
    $orders = $api->Orders->all(['limit' => 1]);

    $order = current($orders);

    $update = $api->Orders->Metafields->update($order->id, [
        'metafield' => [
            "namespace"  => "mondial_relay",
            "title"      => "parcel_id",
            "value"      => "FR-007118",
            "value_type" => "string"
        ]
    ]);


} catch (\Exception $e){
    dd($e);
}

echo '<pre>';
print_r($update);
echo '</pre>';


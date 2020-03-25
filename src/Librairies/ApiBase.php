<?php


namespace Kreezalid\Librairies;


use Exception;

class ApiBase
{
    public function castResponseToEntity($response, $entityClassName)
    {

        if (is_string($entityClassName)) {
            $entity = new $entityClassName();
        } else {
            throw new Exception("Cannot cast response to entity object. Wrong entity class name");
        }

        $responseProperties = array_keys($response);
        foreach ($responseProperties as $responseProperty){
            $entity->{$responseProperty} = $response[$responseProperty];
        }
        return $entity;
    }

}
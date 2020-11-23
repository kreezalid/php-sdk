<?php

namespace Kreezalid\Libraries;

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

        $entityProperties = array_keys(get_object_vars($entity));

        // Send back only responded properties (in case we use the fields param to filter only desired fields
        foreach ($entityProperties as $field) {
            if(isset($response[$field])) {
                $entity->{$field} = $response[$field];
            } else {
                unset($entity->{$field});
            }
        }

        return $entity;
    }

}
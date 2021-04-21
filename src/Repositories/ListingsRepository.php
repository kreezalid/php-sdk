<?php
namespace Kreezalid\Repositories;

use Kreezalid\Entities\Listing;
use Kreezalid\Libraries\Exception;

class ListingsRepository extends Repository
{

    public $Metafields;

    public function __construct($api)
    {
        $this->Metafields = new MetafieldsRepository($api, 'listings');

        parent::__construct($api);
    }

    public function all($params = [])
    {
        $listings = $this->api->execute('GET', '/listings.json', $params);

        if(!isset($listings['listings']) || empty($listings['listings'])) {
            return $listings;
        }

        $listingObjects = [];
        foreach ($listings['listings'] as $listing) {
            $listingObjects[] = $this->base->castResponseToEntity($listing, Listing::class);
        }

        return $listingObjects;
    }

    public function get($id, $params = [])
    {
        if(empty($id)) {
            throw new Exception('Missing or undefined param ID');
        }
        if(!is_scalar($id)) {
            throw new Exception('Wrong ID:' . $id);
        }

        $listing = $this->api->execute('GET', '/listings/' . $id . '.json', $params);

        if(!isset($listing['listing']) || empty($listing['listing'])) {
            return $listing;
        }
        return $this->base->castResponseToEntity($listing['listing'], Listing::class);
    }

    public function create($params = [])
    {
        return $this->api->execute('POST', '/listings.json', $params);
    }

    public function update($id, $params = [])
    {
        return $this->api->execute('PUT', '/listings/' . $id . '.json', $params);
    }

    public function delete($id, $params = [])
    {
        return $this->api->execute('DELETE', '/listings/' . $id . '.json', $params);
    }
}
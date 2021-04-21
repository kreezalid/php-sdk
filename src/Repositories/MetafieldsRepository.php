<?php
namespace Kreezalid\Repositories;

class MetafieldsRepository extends Repository
{
    private $repository;

    public function __construct($api, $repository)
    {
        $this->repository = $repository;
        parent::__construct($api);
    }

    public function get($id)
    {
        return $this->api->execute('GETT', '/' . $this->repository . '/' . $id . '/metafields');
    }

    public function update($id, $params = [])
    {
        return $this->api->execute('POST', '/' . $this->repository . '/' . $id . '/metafields', $params);
    }
}
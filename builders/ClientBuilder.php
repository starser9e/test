<?php


namespace builders;

use DTO\Client;
use DTO\ClientInterface;
use DTO\DTOInterface;

class ClientBuilder implements BuilderInterface
{

    function build(\stdClass $data): DTOInterface
    {
        return $this->getInstanceDTO()
            ->setAge($data->age)
            ->setFullName($data->fullName)
            ->setPrimaryKey($data->id);
    }

    protected function getInstanceDTO(): ClientInterface{
        return new Client();
    }
}
<?php


namespace repository;


use builders\BuilderInterface;
use storages\StorageInterface;

class ExternalRepository implements RepositoryInterface
{
    private $storage;
    private $builder;

    public function __construct(StorageInterface $storage, BuilderInterface $builder)
    {
        $this->storage = $storage;
        $this->builder = $builder;
    }

    function fetch(): StorageInterface
    {
        $storage = $this->getStorage();

        foreach ($this->getData() as $data){
            $storage->create($this->builder->build($data));
        }
        return $storage;
    }

    protected function getStorage(): StorageInterface
    {
        return $this->storage;
    }

    protected function getBuilder()
    {
        return $this->builder;
    }

    // Это МОК
    protected function getData(){
        $client1 = new \stdClass();
        $client1->age = 1;
        $client1->fullName = 'Mike';
        $client1->id = 1;

        $client2 = new \stdClass();
        $client2->age = 55;
        $client2->fullName = 'Rob';
        $client2->id = 2;

        $client3 = new \stdClass();
        $client3->age = 33;
        $client3->fullName = 'Kristian';
        $client3->id = 3;
        return [
            $client1,
            $client2,
            $client3,
        ];
    }

}
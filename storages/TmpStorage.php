<?php

namespace storages;

use DTO\DTOInterface;

class TmpStorage implements StorageInterface
{

    private $data = [];

    private function isExistDTO(DTOInterface $dto): bool
    {
        return array_key_exists($dto->getPrimaryKey(), $this->data);
    }

    function create(DTOInterface $dto): StorageInterface
    {
        if (!$this->isExistDTO($dto)){
            $this->data[$dto->getPrimaryKey()] = $dto;
        }else{
            $this->update($dto);
        }
        return $this;
    }


    function remove(DTOInterface $dto): StorageInterface
    {
        if ($this->isExistDTO($dto)){
            unset($this->data[$dto->getPrimaryKey()]);
        }
        return $this;
    }

    function update(DTOInterface $dto): StorageInterface
    {
        if (!$this->isExistDTO($dto)){
            $this->create($dto);
        }else{
            $this->data[$dto->getPrimaryKey()] = $dto;
        }
    }

    function fetchAll():array
    {
        return $this->data;
    }

}
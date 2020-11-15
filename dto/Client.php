<?php


namespace DTO;

class Client implements ClientInterface, DTOInterface
{
    private $primaryKey;
    private $fullName;
    private $age;

    function getPrimaryKey(): int
    {
        return $this->primaryKey;
    }

    function setPrimaryKey(int $val): ClientInterface
    {
        $this->primaryKey = $val;
        return $this;
    }

    function getFullName(): string
    {
        return $this->fullName;
    }

    function setFullName(string $val): ClientInterface
    {
        $this->fullName = $val;
        return $this;
    }

    function getAge(): int
    {
        return $this->age;
    }

    function setAge(int $val): ClientInterface
    {
        $this->age = $val;
        return $this;
    }
}
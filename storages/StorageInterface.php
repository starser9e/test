<?php

namespace storages;

use DTO\DTOInterface;

interface StorageInterface
{
    function create(DTOInterface $dto): self;

    function remove(DTOInterface $dto): self;

    function update(DTOInterface $dto): self;


    function fetchAll(): array;
}
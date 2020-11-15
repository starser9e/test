<?php

namespace repository;

use storages\StorageInterface;

interface RepositoryInterface
{
    function fetch(): StorageInterface;
}
<?php

namespace builders;

use DTO\DTOInterface;

interface BuilderInterface
{
    function build(\stdClass $data): DTOInterface;
}
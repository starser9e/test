<?php

namespace DTO;

interface ClientInterface
{
    function getPrimaryKey() : int;
    function setPrimaryKey(int $val) : self;

    function getFullName() : string;
    function setFullName(string $val) : self;

    function getAge() : int;
    function setAge(int $val) : self;
}
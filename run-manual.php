<?php
declare(strict_types = 1);
spl_autoload_register(function(string $class) {
    $fn =  $class.'.php';
    $fn = str_replace('\\', '/', $fn);
    if (file_exists($fn)) require_once $fn;
});

function echoResult(\storages\StorageInterface $storage){
    /** @var DTO\ClientInterface $item */
    foreach ($storage->fetchAll() as $item){
        echo $item->getFullName().' : '.$item->getAge()."\n";
    }
    echo "__________________\n";
}

$builder = new \builders\ClientBuilder();
$storage = new \storages\TmpStorage();
$repository = new \repository\ExternalRepository($storage, $builder);
$data =  $repository->fetch();

echoResult($storage);

$storage->remove($storage->fetchAll()[2]);

echoResult($storage);
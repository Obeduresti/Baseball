<?php
$collection = (new MongoDB\Client)->Baseball->HallOfFame;

$cursor = $collection->find(
    [],
    [
        'limit' => 5,
        'sort' => ['pop' => -1],
    ]
    );

foreach($cursor as $document){
    print_r($document);
}
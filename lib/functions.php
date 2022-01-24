<?php

//require './data/pets.json';

function get_pets()
{
    $petsJson = file_get_contents('./data/pets.json');
    $pets = json_decode($petsJson, true);

    return $pets;
}


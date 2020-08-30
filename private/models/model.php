<?php

function getProjectsHome() {
    $connection = dbConnect();
    $sql        = 'SELECT * FROM `projecten` ORDER BY rand() LIMIT 3';
    $statement  = $connection->query($sql);
    
    return $statement->fetchAll();
}

function getTutorialsHome() {
    $connection = dbConnect();
    $sql        = 'SELECT * FROM `tutorials` ORDER BY rand() LIMIT 4';
    $statement  = $connection->query($sql);

    return $statement->fetchAll();
}

function getSkills() {
    $connection = dbConnect();
    $sql        = 'SELECT * FROM `skills`';
    $statement  = $connection->query($sql);

    return $statement->fetchAll();
}
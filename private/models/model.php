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

function getAllProjects() {
    $connection = dbConnect();
    $sql        = 'SELECT * FROM `projecten`';
    $statement  = $connection->query($sql);

    return $statement->fetchAll();
}

function getAllProjectDetails($link) {
    $connection = dbConnect();
    $sql        = 'SELECT * FROM `projecten` WHERE `link` = :link';
    $statement  = $connection->prepare($sql);

    $params = [
        'link' => $link
    ];

    $statement->execute($params);
    return $statement->fetchAll();
}

function getMadeWith() {
    $connection = dbConnect();
    $sql        = 'SELECT * 
    FROM `projecten`
    INNER JOIN `maakmethodes`
    ON `projecten`.`id` = `maakmethodes`.`project_ID`
    WHERE `projecten`.`id` = `maakmethodes`.`project_ID`';
    $statement  = $connection->query($sql);

    return $statement->fetchAll();
}

function getTutorials() {
    $connection = dbConnect();
    $sql        = 'SELECT * FROM `tutorials`';
    $statement  = $connection->query($sql);

    return $statement->fetchAll();
}
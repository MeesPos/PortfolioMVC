<?php

function getProjectsHome() {
    $connection = dbConnect();
    $sql        = 'SELECT * FROM `projecten` ORDER BY rand() LIMIT 3';
    $statement  = $connection->query($sql);
    
    return $statement->fetchAll();
}
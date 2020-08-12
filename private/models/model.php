<?php

function getProjects() {
    $connection = dbConnect();
    $sql        = 'SELECT * FROM `projecten`';
    $statement  = $connection->query($sql);
    
    return $statement->fetchAll();
}
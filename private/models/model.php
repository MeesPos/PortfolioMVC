<?php

function getProjectsHome()
{
    $connection = dbConnect();
    $sql        = 'SELECT * FROM `projecten` ORDER BY rand() LIMIT 3';
    $statement  = $connection->query($sql);

    return $statement->fetchAll();
}

function getTutorialsHome()
{
    $connection = dbConnect();
    $sql        = 'SELECT * FROM `tutorials` ORDER BY rand() LIMIT 4';
    $statement  = $connection->query($sql);

    return $statement->fetchAll();
}

function getSkills()
{
    $connection = dbConnect();
    $sql        = 'SELECT * FROM `skills`';
    $statement  = $connection->query($sql);

    return $statement->fetchAll();
}

function getAllProjects()
{
    $connection = dbConnect();
    $sql        = 'SELECT * FROM `projecten`';
    $statement  = $connection->query($sql);

    return $statement->fetchAll();
}

function getAllProjectDetails($link)
{
    $connection = dbConnect();
    $sql        = 'SELECT * FROM `projecten` WHERE `link` = :link';
    $statement  = $connection->prepare($sql);

    $params = [
        'link' => $link
    ];

    $statement->execute($params);
    return $statement->fetchAll();
}

function getMadeWith()
{
    $connection = dbConnect();
    $sql        = 'SELECT * 
    FROM `projecten`
    INNER JOIN `maakmethodes`
    ON `projecten`.`id` = `maakmethodes`.`project_ID`
    WHERE `projecten`.`id` = `maakmethodes`.`project_ID`';
    $statement  = $connection->query($sql);

    return $statement->fetchAll();
}

function getTutorials()
{
    $connection = dbConnect();
    $sql        = 'SELECT * FROM `tutorials`';
    $statement  = $connection->query($sql);

    return $statement->fetchAll();
}

function getTutorialsByLink($link)
{
    $connection = dbConnect();
    $sql        = 'SELECT * FROM `tutorials` WHERE `link` = :link';
    $statement  = $connection->prepare($sql);

    $params = [
        'link' => $link
    ];

    $statement->execute($params);
    return $statement->fetchAll();
}

function userRegisteredCheck($username)
{

    $connection = dbConnect();
    $sql =  'SELECT * FROM `gebruikers` WHERE `username`= :username';
    $statement = $connection->prepare($sql);
    $statement->execute(['username' => $username]);

    return ($statement->rowCount() === 0);
}

function getLoginUserInfo($username)
{

    $connection = dbConnect();
    $sql =  'SELECT * FROM `gebruikers` WHERE `username`= :username';

    $statement = $connection->prepare($sql);
    $statement->execute(['username' => $username]);
    if ($statement->rowCount() === 1) {
        return  $statement->fetch();
    }
    return false;
}

function getTasks()
{
    $connection = dbConnect();
    $sql = 'SELECT * FROM tasks ORDER BY id DESC';
    $statement = $connection->query($sql);

    return $result = $statement->fetchAll();
}

function createPost($results, $errors) {
    print_r($results);
    $headerImage = uploadHeaderImage($_FILES, $errors);
    $postText    = $results['mytextarea'];
    $title       = $results['title'];
    $categories  = $results['catoDropdown'];
    $url         = $stringURL = str_replace(' ', '-', $title); 
                $stringURL = urlencode($stringURL);
    $excerpt     = $arr = explode(' ', trim($postText));
    $date        = time();
                 setlocale(LC_ALL, 'nl_NL');
                 strftime('%A, %B %d, %Y', $date);

    $connection = dbConnect();
    $sql = 'INSERT INTO `tutorials` ( `titel`, `link`, `datum`, `samenvatting`, `content`, `categorie`, `headerimage` )
         VALUES (:titel, :link, :datum, :samenvatting, :content, :categorie, :headerimage)';
    $statement = $connection->prepare($sql);

    $params = [
        'titel'        => $title,
        'link'         => $url,
        'datum'        => $date,
        'samenvatting' => $excerpt,
        'content'      => $postText,
        'categorie'    => $categories,
        'headerimage'  => $headerImage
    ];

    $statement->execute($params);
}
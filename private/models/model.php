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
    $sql        = 'SELECT * FROM `tutorials`
    INNER JOIN `catos`
    ON `tutorials`.`id` = `catos`.`post_id`
    WHERE `tutorials`.`id` = `catos`.`post_id`';
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

function createPost($results, $headerImage, $errors) {
    $url          = $stringURL = strtolower(str_replace(' ', '-', $results['title']));
                  echo $stringURL;
    $date         = date("d-m-Y");

    $connection = dbConnect();
    $sql = 'INSERT INTO `tutorials` ( `titel`, `link`, `datum`, `samenvatting`, `content`, `headerimage` )
         VALUES (:titel, :link, :datum, :samenvatting, :content, :headerimage)';

    $params = [
        'titel'        => $results['title'],
        'link'         => $url,
        'datum'        => $date,
        'samenvatting' => limit_text($results['mytextarea'], 40),
        'content'      => $results['mytextarea'],
        'headerimage'  => $headerImage
    ];

    print_r($params);

    $statement = $connection->prepare($sql);
    $statement->execute($params);
}

function getId() {
    $connection = dbConnect();

    $sql = 'SELECT MAX(id) FROM tutorials';
    $statement = $connection->query($sql);

    return $statement->fetchAll();
}

function uploadCato($results, $errors, $postID) {    
    foreach($postID as $lastID) {
        foreach($lastID as $theID) {
            $lastPostID = $theID;
        }
    }

    $connection = dbConnect();

    $sql = 'INSERT INTO `catos` ( `cat_name`, `post_id`) VALUES (:cat_name, :post_id)';
    $statement = $connection->prepare($sql);

    foreach($results['catoDropdown'] as $row) {
        $params = [
            'cat_name' => $row,
            'post_id'  => $lastPostID
        ];

        $statement->execute($params);
    }
}

function getAllTutorials() {
    $connection = dbConnect();

    $sql = 'SELECT * FROM `tutorials`';
    $statement = $connection->query($sql);

    return $statement->fetchAll();
}

function deleteThePost($id) {
    $connection = dbConnect();

    $sql = 'DELETE FROM `tutorials` WHERE `id` = :id';
    $statement = $connection->prepare($sql);

    $params = [
        'id' => $id
    ];

    $statement->execute($params);
}

function deleteAllCatos($id) {
    $connection = dbConnect();

    $sql = 'DELETE FROM `catos` WHERE `post_id` = :id';
    $statement = $connection->prepare($sql);

    $params = [
        'id' => $id
    ];

    $statement->execute($params);
}

function getCurrentPost($id) {
    $connection = dbConnect();

    $sql = 'SELECT * FROM tutorials WHERE id = :id';
    $statement = $connection->prepare($sql);

    $params = [
        'id' => $id
    ];

    $statement->execute($params);
    return $statement->fetchAll();
}

function getCurrentCato($id) {
    $connection = dbConnect();

    $sql = 'SELECT * FROM catos WHERE post_id = :id';
    $statement = $connection->prepare($sql);
    
    $params = [
        'id' => $id
    ];

    $statement->execute($params);
    return $statement->fetchAll();
}
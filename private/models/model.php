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

function getContent() {
    $connection = dbConnect();
    $sql        = 'SELECT * FROM `content`';
    $statement  = $connection->query($sql);

    return $statement->fetchAll();
}

function getCatosForTutorials($id) {
    $connection = dbConnect();
    $sql        = 'SELECT * FROM `catos` WHERE post_id = :id';
    $statement  = $connection->prepare($sql);

    $params = [
        'id' => $id
    ];

    $statement->execute($params);
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
    $urlLang = 'link_' . $_SESSION['lang'];

    $connection = dbConnect();
    $sql        = 'SELECT * FROM `projecten` WHERE ' . $urlLang . ' = :link';
    $statement  = $connection->prepare($sql);

    $params = [
        'link' => $link
    ];

    $statement->execute($params);
    return $statement->fetchAll();
}

function getMadeWith($row)
{
    $connection = dbConnect();
    $sql        = 'SELECT * FROM `maakmethodes` WHERE project_ID = :id';
    $statement  = $connection->prepare($sql);

    $params = [
        'id' => $row['id']
    ];

    $statement->execute($params);
    return $statement->fetchAll();
}

function getProjectImages($row) {
    $connection = dbConnect();
    $sql        = 'SELECT * FROM `projectimages` WHERE `project_id` = :id';
    $statement  = $connection->prepare($sql);

    $params = [
        'id' => $row['id']
    ];

    $statement->execute($params);
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

function getTutorialCato($getTutorials)
{
    $connection = dbConnect();
    $sql        = 'SELECT * FROM `catos` WHERE `post_id` = :id';
    $statement  = $connection->prepare($sql);

    foreach ($getTutorials as $row) {
        $params = [
            'id' => $row['id']
        ];
    }

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

function createPost($results, $headerImage, $errors)
{
    $url          = $stringURL = strtolower(str_replace(' ', '-', $results['title']));
    echo $stringURL;
    $date         = date("d-m-Y");

    $connection = dbConnect();
    $sql = 'INSERT INTO `tutorials` ( `titel`, `link`, `datum`, `samenvatting`, `content_nl`, `content_en`, `headerimage` )
         VALUES (:titel, :link, :datum, :samenvatting, :content_nl, :content_en :headerimage)';

    $params = [
        'titel'        => $results['title'],
        'link'         => $url,
        'datum'        => $date,
        'samenvatting' => limit_text($results['mytextarea'], 40),
        'content_nl'   => $results['mytextarea'],
        'content_en'   => $results['entextarea'],
        'headerimage'  => $headerImage
    ];

    print_r($params);

    $statement = $connection->prepare($sql);
    $statement->execute($params);
}

function getId()
{
    $connection = dbConnect();

    $sql = 'SELECT MAX(id) FROM tutorials';
    $statement = $connection->query($sql);

    return $statement->fetchAll();
}

function uploadCato($results, $errors, $postID)
{
    foreach ($postID as $lastID) {
        foreach ($lastID as $theID) {
            $lastPostID = $theID;
        }
    }

    $connection = dbConnect();

    $sql = 'INSERT INTO `catos` ( `cat_name`, `post_id`) VALUES (:cat_name, :post_id)';
    $statement = $connection->prepare($sql);

    foreach ($results['catoDropdown'] as $row) {
        $params = [
            'cat_name' => $row,
            'post_id'  => $lastPostID
        ];

        $statement->execute($params);
    }
}

function getAllTutorials()
{
    $connection = dbConnect();

    $sql = 'SELECT * FROM `tutorials`';
    $statement = $connection->query($sql);

    return $statement->fetchAll();
}

function deleteThePost($id, $results) {
    $image = $results['image'];

    $myFile = "img/postImages/headers/$image";
    unlink($myFile) or die("Couldn't delete file");

    $connection = dbConnect();

    $sql = 'DELETE FROM `tutorials` WHERE `id` = :id';
    $statement = $connection->prepare($sql);

    $params = [
        'id' => $id
    ];

    $statement->execute($params);
}

function deleteAllCatos($id)
{
    $connection = dbConnect();

    $sql = 'DELETE FROM `catos` WHERE `post_id` = :id';
    $statement = $connection->prepare($sql);

    $params = [
        'id' => $id
    ];

    $statement->execute($params);
}

function getCurrentPost($id)
{
    $connection = dbConnect();

    $sql = 'SELECT * FROM tutorials WHERE id = :id';
    $statement = $connection->prepare($sql);

    $params = [
        'id' => $id
    ];

    $statement->execute($params);
    return $statement->fetchAll();
}

function getCurrentCato($id)
{
    $connection = dbConnect();

    $sql = 'SELECT * FROM catos WHERE post_id = :id';
    $statement = $connection->prepare($sql);

    $params = [
        'id' => $id
    ];

    $statement->execute($params);
    return $statement->fetchAll();
}

function updatePost($results, $id, $errors)
{
    $url          = $stringURL = strtolower(str_replace(' ', '-', $results['title']));
    echo $stringURL;

    $connection = dbConnect();

    $sql = 'UPDATE tutorials SET titel = :titel, link = :link, samenvatting = :samenvatting, content = :content WHERE id = :id';
    $statement = $connection->prepare($sql);

    $params = [
        'id' => $id,
        'titel' => $results['title'],
        'link' => $url,
        'samenvatting' => limit_text($results['mytextarea'], 40),
        'content'      => $results['mytextarea'],
    ];

    $statement->execute($params);
}

function updateNewCatos($results, $id, $errors)
{
    $connection = dbConnect();

    $sql = 'INSERT INTO `catos` (`cat_name`, `post_id`) VALUES (:cat_name, :post_id)';
    $statement = $connection->prepare($sql);

    foreach ($results['catoDropdown'] as $row) {
        $params = [
            'cat_name' => $row,
            'post_id'  => $id
        ];

        $statement->execute($params);
    }
}

function createProject($results, $headerImage, $errors)
{
    $url_nl = $stringURL = strtolower(str_replace(' ', '-', $results['title_nl']));
    $url_en = $stringURL = strtolower(str_replace(' ', '-', $results['title_en']));

    $connection = dbConnect();
    $sql = 'INSERT INTO `projecten` ( `projectnaam_nl`, `projectnaam_en`, `link_nl`, `link_en`, `datum`, `content_nl`, `content_en`, `headerimage`, `soort`, `taal`, `liveversie`, `github`)
         VALUES (:titel_nl, :titel_en, :link_nl, :link_en, :datum, :content_nl, :content_en, :headerimage, :soort, :taal, :liveversie, :github)';

    $params = [
        'titel_nl'     => $results['title_nl'],
        'titel_en'     => $results['title_en'],
        'link_nl'      => $url_nl,
        'link_en'      => $url_en,
        'datum'        => $results['projectdate'],
        'content_nl'   => $results['mytextarea'],
        'content_en'   => $results['entextarea'],
        'headerimage'  => $headerImage,
        'soort'        => $results['soortproject'],
        'taal'         => $results['taal'],
        'liveversie'   => $results['liveversie'],
        'github'       => $results['github']
    ];

    $statement = $connection->prepare($sql);
    $statement->execute($params);
}

function getProjID()
{
    $connection = dbConnect();

    $sql = 'SELECT MAX(id) FROM projecten';
    $statement = $connection->query($sql);

    return $statement->fetchAll();
}

function uploadMethode($results, $errors, $postID)
{
    foreach ($postID as $lastID) {
        foreach ($lastID as $theID) {
            $lastPostID = $theID;
        }
    }

    $connection = dbConnect();

    $sql = 'INSERT INTO `maakmethodes` ( `naam`, `project_ID`) VALUES (:naam, :project_ID)';
    $statement = $connection->prepare($sql);

    foreach ($results['methodeDropdown'] as $row) {
        $params = [
            'naam' => $row,
            'project_ID'  => $lastPostID
        ];

        $statement->execute($params);
    }
}

function uploadImages($results, $errors, $postID) {
    foreach ($postID as $lastID) {
        foreach ($lastID as $theID) {
            $lastPostID = $theID;
        }
    }

    $connection = dbConnect();

    $sql       = 'INSERT INTO `projectimages` ( `image_naam`, `project_id` ) VALUES (:naam, :project_id)';
    $statement = $connection->prepare($sql);

    $imageName = uploadAllImages();

    foreach ($imageName as $row) {
        foreach ($row as $file) {
            $params = [
                'naam'       => $file,
                'project_id' => $lastPostID
            ];

            $statement->execute($params);
        }
    }
}

function deleteProjectMethodes($id)
{
    $connection = dbConnect();

    $sql = 'DELETE FROM `maakmethodes` WHERE `project_ID` = :id';
    $statement = $connection->prepare($sql);

    $params = [
        'id' => $id
    ];

    $statement->execute($params);
}

function getAllProjectImages($id) {
    $connection = dbConnect();

    $sql = 'SELECT * FROM `projectimages` WHERE `project_id` = :id';
    $statement = $connection->prepare($sql);

    $params = [
        'id' => $id
    ];

    $statement->execute($params);
    return $statement->fetchAll();
}

function deteteProjectImages($id, $results) {
    $images = getAllProjectImages($id);

    foreach($images as $row) {
        $file = $row['image_naam'];

        $myFile = "img/projectImages/$file";
        unlink($myFile) or die("Couldn't delete file");
    }

    $headerImage = $results['headerimage'];

    $delHeader = "img/postImages/headers/$headerImage";
    unlink($delHeader) or die("Couldn't delete file");

    $connection = dbConnect();

    $sql = 'DELETE FROM `projectimages` WHERE `project_id` = :id';
    $statement = $connection->prepare($sql);

    $params = [
        'id' => $id
    ];

    $statement->execute($params);
}

function deleteTheProject($id)
{
    $connection = dbConnect();

    $sql = 'DELETE FROM `projecten` WHERE `id` = :id';
    $statement = $connection->prepare($sql);

    $params = [
        'id' => $id
    ];

    $statement->execute($params);
}

function getCurrentProject($id)
{
    $connection = dbConnect();

    $sql = 'SELECT * FROM projecten WHERE id = :id';
    $statement = $connection->prepare($sql);

    $params = [
        'id' => $id
    ];

    $statement->execute($params);
    return $statement->fetchAll();
}

function getCurrentMethodes($id)
{
    $connection = dbConnect();

    $sql = 'SELECT * FROM maakmethodes WHERE project_ID = :id';
    $statement = $connection->prepare($sql);

    $params = [
        'id' => $id
    ];

    $statement->execute($params);
    return $statement->fetchAll();
}

function getCurrentImages($id) {
    $connection = dbConnect();

    $sql = 'SELECT * FROM projectimages WHERE project_id = :id';
    $statement = $connection->prepare($sql);

    $params = [
        'id' => $id
    ];

    $statement->execute($params);
    return $statement->fetchAll();
}

function updateTheProject($results, $id)
{
    $url = $stringURL = strtolower(str_replace(' ', '-', $results['title']));
    echo $stringURL;

    $connection = dbConnect();

    $sql = 'UPDATE projecten SET projectnaam = :titel, link = :link, content = :content, soort = :soort, taal = :taal, liveversie = :liveversie, github = :github WHERE id = :id';
    $statement = $connection->prepare($sql);

    $params = [
        'id'         => $id,
        'titel'      => $results['title'],
        'link'       => $url,
        'content'    => $results['mytextarea'],
        'soort'      => $results['soortproject'],
        'taal'       => $results['taal'],
        'liveversie' => $results['liveversie'],
        'github'     => $results['github']
    ];

    $statement->execute($params);
}

function addNewMethods($results, $id)
{
    $connection = dbConnect();

    $sql = 'INSERT INTO `maakmethodes` (`naam`, `project_id`) VALUES (:naam, :project_id)';
    $statement = $connection->prepare($sql);

    foreach ($results['catoDropdown'] as $row) {
        $params = [
            'naam' => $row,
            'project_id'  => $id
        ];

        $statement->execute($params);
    }
}

function uploadSkill($results) {
    $connection = dbConnect();

    $sql = 'INSERT INTO `skills` (`fa-class`, `skillnaam`, `niveau`) VALUES (:icon, :naam, :niveau)';
    $statement = $connection->prepare($sql);

    $params = [
        'icon'   => $results['icon'],
        'naam'   => $results['skill'],
        'niveau' => $results['skillNiveau']
    ];

    $statement->execute($params);
}

function deleteSkill($id) {
    $connection = dbConnect();

    $sql = 'DELETE FROM `skills` WHERE `id` = :id';
    $statement = $connection->prepare($sql);

    $params = [
        'id' => $id
    ];

    $statement->execute($params);
}

function getCurrentSkill($id) {
    $connection = dbConnect();

    $sql = 'SELECT * FROM skills WHERE id = :id';
    $statement = $connection->prepare($sql);

    $params = [
        'id' => $id
    ];

    $statement->execute($params);
    return $statement->fetchAll();
}

function updateSkill($id, $results) {
    $connection = dbConnect();

    $sql = 'UPDATE skills SET `fa-class` = :icon, `skillnaam` = :naam, `niveau` = :niveau WHERE id = :id';
    $statement = $connection->prepare($sql);

    $params = [
        'id'     => $id,
        'icon'   => $results['icon'],
        'naam'   => $results['skill'],
        'niveau' => $results['skillNiveau']
    ];

    $statement->execute($params);
}
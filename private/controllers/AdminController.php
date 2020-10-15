<?php

namespace Website\Controllers;

/**
 * Class AdminController
 *
 * Deze handelt de logica van de homepage af
 * Haalt gegevens uit de "model" laag van de website (de gegevens)
 * Geeft de gegevens aan de "view" laag (HTML template) om weer te geven
 *
 */
class AdminController
{
    public function admin()
    {
        loginCheck();

        $template_engine = get_template_engine();
        echo $template_engine->render('admin');
    }

    public function loginPage()
    {
        
        $template_engine = get_template_engine();
        echo $template_engine->render('adminLogin');
    }

    public function adminLogin()
    {
        $result = validate($_POST);

        if (count($result['errors']) === 0) {
            if (!userRegisteredCheck($result['data']['username'])) {
                $userInfo = getLoginUserInfo($result['data']['username']);
                if (password_verify($result['data']['wachtwoord'], $userInfo['wachtwoord'])) {
                    $_SESSION['user_id'] = $userInfo['id'];
                    $overviewURL = url('admin');
                    redirect($overviewURL);
                } else {
                    $result['errors']['wachtwoord'] = 'Onjuist wachtwoord, probeer het overnieuw!';
                }
            } else {
                $result['errors']['username'] = 'Onbekende gebruikersnaam!';
            }
        }

        $template_engine = get_template_engine();
        echo $template_engine->render('adminLogin', ['errors' => $result['errors']]);
    }

    public function adminPostMaken()
    {

        loginCheck();

        $template_engine = get_template_engine();
        echo $template_engine->render('adminPostMaken');
    }

    public function adminTaken()
    {

        loginCheck();
        $tasks = getTasks();

        $template_engine = get_template_engine();
        echo $template_engine->render('taskList', ['tasks' => $tasks]);
    }

    public function addTask()
    {
        loginCheck();
        $connection = dbConnect();

        if ($_POST["task_name"]) {
            $data = array(
                ':details' => trim($_POST["task_name"]),
                ':task_status' => 'no'
            );

            $sql = 'INSERT INTO tasks (details, task_status) VALUES (:details, :task_status)';
            $statement = $connection->prepare($sql);

            if ($statement->execute($data)) {
                $id = $connection->lastInsertId();
                echo '<a href="#" class="list-group-item" id="list-group-item-' . $id . '" data-id="' . $id . '">' . $_POST["task_name"] . ' <span class="badge" data-id="' . $id . '"><i class="fas fa-trash"></i></span></a>';
            }
        }
    }

    public function deleteTask()
    {
        loginCheck();

        $connection = dbConnect();

        if ($_POST["id"]) {
            $data = array(
                ':id'  => $_POST['id']
            );

            $sql = "DELETE FROM tasks WHERE id = :id";
            $statement = $connection->prepare($sql);

            if ($statement->execute($data)) {
                echo 'Done';
            }
        }
    }

    public function updateTask()
    {
        loginCheck();

        $connection = dbConnect();

        if ($_POST["id"]) {
            $data = array(
                ':task_status'  => 'yes',
                ':id'  => $_POST["id"]
            );

            $sql = 'UPDATE tasks SET task_status = :task_status WHERE id = :id';
            $statement = $connection->prepare($sql);

            if ($statement->execute($data)) {
                echo 'Done';
            }
        }
    }

    public function jwt() {
     
        $template_engine = get_template_engine();
        echo $template_engine->render('jwt');   
    }

    public function uploadPost() {
        
        loginCheck();
        $errors = [];

        $headerImage = uploadHeaderImage($_FILES, $errors);

        if(count($errors) === 0) {
            createPost($_POST, $headerImage, $errors);
            $postID = getId();
            uploadCato($_POST, $errors, $postID);
        }

        $bedanktUrl = url("allPosts");
        redirect($bedanktUrl);
    }

    public function allPosts() {

        loginCheck();
        $posts = getAllTutorials();

        $template_engine = get_template_engine();
        echo $template_engine->render('adminAllPosts', ['posts' => $posts]);
    }

    public function deletePost($id) {
        loginCheck();
        deleteAllCatos($id);
        deleteThePost($id, $_POST);

        $overviewURL = url('allPosts');
        redirect($overviewURL);
    }

    public function wijzigPost($id) {
        loginCheck();
        $currentPost = getCurrentPost($id);
        $currentCato = getCurrentCato($id);

        $template_engine = get_template_engine();
        echo $template_engine->render('wijzigPost', ['currentPost' => $currentPost, 'currentCato' => $currentCato]);
    }
    
    public function updatePost($id) {
        
        loginCheck();
        $errors = [];

        if(count($errors) === 0) {
            updatePost($_POST, $id, $errors);
            deleteAllCatos($id);
            updateNewCatos($_POST, $id, $errors);
        }

        $bedanktUrl = url("allPosts");
        redirect($bedanktUrl);
    }

    public function projectMaken() {

        loginCheck();

        $template_engine = get_template_engine();
        echo $template_engine->render('adminProjectPosten');
    }

    public function uploadProject() {

        loginCheck();
        $errors = [];

        $headerImage = uploadHeaderImage($_FILES, $errors);

        if(count($errors) === 0) {
            createProject($_POST, $headerImage, $errors);
            $postID = getProjID();
            uploadMethode($_POST, $errors, $postID);
            uploadImages($_FILES, $errors, $postID);
        }

        $bedanktUrl = url("allProjects");
        redirect($bedanktUrl);
    }

    public function allProjects() {

        loginCheck();
        $projects = getAllProjects();

        $template_engine = get_template_engine();
        echo $template_engine->render('adminAllProjects', ['projects' => $projects]);
    }

    public function deleteProject($id) {
        loginCheck();
        deleteProjectMethodes($id);
        deteteProjectImages($id, $_POST);
        deleteTheProject($id);

        $overviewURL = url('allProjects');
        redirect($overviewURL);
    }

    public function wijzigProject($id) {
        loginCheck();
        $currentProject = getCurrentProject($id);
        $currentMethods = getCurrentMethodes($id);

        $template_engine = get_template_engine();
        echo $template_engine->render('wijzigProject', ['currentProject' => $currentProject, 'currentMethods' => $currentMethods]);
    }

    public function updateProject($id) {
        loginCheck();
        updateTheProject($_POST, $id);
        deleteProjectMethodes($id);
        addNewMethods($_POST, $id);

        $overviewURL = url('allProjects');
        redirect($overviewURL);
    }

    public function skills() {
        loginCheck();
        $skills = getSkills();

        $template_engine = get_template_engine();
        echo $template_engine->render('adminSkills', ['skills' => $skills]);
    }

    public function skillsUpload() {
        loginCheck();
        uploadSkill($_POST);

        $overviewURL = url('skills');
        redirect($overviewURL);
    }

    public function deleteSkill($id) {
        loginCheck();
        deleteSkill($id);

        $overviewURL = url('skills');
        redirect($overviewURL);
    }

    public function updateSkill($id) {
        loginCheck();
        $currentSkill = getCurrentSkill($id);
        $skills = getSkills();

        $template_engine = get_template_engine();
        echo $template_engine->render('adminSkillsWijzigen', ['theSkill' => $currentSkill, 'skills' => $skills]);
    }

    public function wijzigSkill($id) {
        loginCheck();
        updateSkill($id, $_POST);

        $overviewURL = url('skills');
        redirect($overviewURL);
    }
}
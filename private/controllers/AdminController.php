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

    public function adminPost()
    {

        $template_engine = get_template_engine();
        echo $template_engine->render('adminPost');
    }

    public function adminTaken()
    {

        $tasks = getTasks();

        $template_engine = get_template_engine();
        echo $template_engine->render('taskList', ['tasks' => $tasks]);
    }

    public function addTask()
    {
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
}

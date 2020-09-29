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
    public function admin() {
        loginCheck();

        $template_engine = get_template_engine();
        echo $template_engine->render('admin');
    }

    public function loginPage() {

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
}

<?php

namespace Website\Controllers;

/**
 * Class ProjectenController
 *
 * Deze handelt de logica van de homepage af
 * Haalt gegevens uit de "model" laag van de website (de gegevens)
 * Geeft de gegevens aan de "view" laag (HTML template) om weer te geven
 *
 */
class ProjectenController {
    public function projecten() {

        $projects = getAllProjects();

        $template_engine = get_template_engine();
		echo $template_engine->render('projecten', ['projects' => $projects]);
    }

    public function projectenDetail($naam) {

        $projectDetails = getAllProjectDetails($naam);

        $template_engine = get_template_engine();
        echo $template_engine->render('projectDetail', ['projectDetails' => $projectDetails]);
    }
}
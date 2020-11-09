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
        $content  = getContent();

        $template_engine = get_template_engine();
		echo $template_engine->render('projecten', ['projects' => $projects, 'content' => $content]);
    }

    public function projectenDetail($id, $link) {

        $projectDetails = getAllProjectDetails($id);
        $madeWith       = getMadeWith($id);
        $images         = getProjectImages($id);
        $content	    = getContent();

        $template_engine = get_template_engine();
        echo $template_engine->render('projectDetail', ['projectDetails' => $projectDetails, 'madeWith' => $madeWith, 'images' => $images, 'content' => $content]);
    }
}
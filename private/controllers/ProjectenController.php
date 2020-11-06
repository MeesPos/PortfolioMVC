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

    public function projectenDetail($link) {

        $projectDetails = getAllProjectDetails($link);
        foreach($projectDetails as $row) {
            $madeWith  = getMadeWith($row);
            $images    = getProjectImages($row);
        }
        $content	   = getContent();

        $template_engine = get_template_engine();
        echo $template_engine->render('projectDetail', ['projectDetails' => $projectDetails, 'madeWith' => $madeWith, 'images' => $images, 'content' => $content]);
    }
}
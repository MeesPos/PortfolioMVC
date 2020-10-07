<?php

namespace Website\Controllers;

/**
 * Class WebsiteController
 *
 * Deze handelt de logica van de homepage af
 * Haalt gegevens uit de "model" laag van de website (de gegevens)
 * Geeft de gegevens aan de "view" laag (HTML template) om weer te geven
 *
 */
class TutorialController {

	public function tutorials() {

		$getTutorials = getTutorials();

		$template_engine = get_template_engine();
		echo $template_engine->render('tutorials', ['tutorial' => $getTutorials]);

    }
    
    public function tutorialDetail($link) {

        $getTutorials = getTutorialsByLink($link);
        $catoTutorial = getTutorialCato($getTutorials);

        $template_engine = get_template_engine();
        echo $template_engine->render('tutorialDetail', ['tutorial' => $getTutorials, 'catogorie' => $catoTutorial]);
    }
}
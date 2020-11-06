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
class WebsiteController {

	public function home() {

		$getProjects  = getProjectsHome();
		$getTutorials = getTutorialsHome();
		$content	  = getContent();

		$template_engine = get_template_engine();
		echo $template_engine->render('homepage', ['project' => $getProjects, 'tutorial' => $getTutorials, 'content' => $content]);

	}

	public function about() {

		$getSkills = getSkills();
		$content	  = getContent();

		$template_engine = get_template_engine();
		echo $template_engine->render('about', ['skills' => $getSkills, 'content' => $content]);
	}

	public function notFound() {

		$content	  = getContent();

		$template_engine = get_template_engine();
		echo $template_engine->render('404', ['content' => $content]);
	}

	public function switchLanguage($language){
		languageSwitch($language);
		redirect($_SERVER['HTTP_REFERER']);
	}
}
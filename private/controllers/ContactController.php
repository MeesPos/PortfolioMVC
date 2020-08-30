<?php

namespace Website\Controllers;

/**
 * Class ContactController
 *
 * Deze handelt de logica van de homepage af
 * Haalt gegevens uit de "model" laag van de website (de gegevens)
 * Geeft de gegevens aan de "view" laag (HTML template) om weer te geven
 *
 */
class ContactController {
    public function contact() {

		$template_engine = get_template_engine();
		echo $template_engine->render('contact');
	}

    public function contactSend()
    {
        $naam = $_POST['naam'];
        $email = $_POST['email'];
        $bericht = $_POST['bericht'];

        $mailer = getSwiftMailer();

        $message = createEmailMessage('mail@meespostma.nl', 'Bericht van: ' . $naam, $naam, $email);

        $message->setBody(
            '<html>' .
                ' <body> ' .
                ' <strong>Het contactformulier is ingevuld en het volgende is verstuurd:</strong>' .
                ' <p>Naam: ' . $naam . '</p> ' .
                ' <p>Email: ' . $email . '</p> ' .
                ' <p>Bericht: ' . $bericht . '</p> ' .
                ' </body> ' .
                ' </html>',
            'text/html'
        );

        $aantalVerstuurd = $mailer->send($message);

        $bedanktUrl = url("contactBedankt");
        redirect($bedanktUrl);
    }

    public function contactBedankt() {

        $template_engine = get_template_engine();
        echo $template_engine->render('contactBedankt');
    }
}
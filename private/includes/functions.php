<?php
// Dit bestand hoort bij de router, enb bevat nog een aantal extra functiesdie je kunt gebruiken
// Lees meer: https://github.com/skipperbent/simple-php-router#helper-functions
require_once __DIR__ . '/route_helpers.php';

// Hieronder kun je al je eigen functies toevoegen die je nodig hebt
// Maar... alle functies die gegevens ophalen uit de database horen in het Model PHP bestand

/**
 * Verbinding maken met de database
 * @return \PDO
 */
function dbConnect() {

	$config = get_config( 'DB' );

	try {
		$dsn = 'mysql:host=' . $config['HOSTNAME'] . ';dbname=' . $config['DATABASE'] . ';charset=utf8';

		$connection = new PDO( $dsn, $config['USER'], $config['PASSWORD'] );
		$connection->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
		$connection->setAttribute( PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC );

		return $connection;

	} catch ( \PDOException $e ) {
		echo 'Fout bij maken van database verbinding: ' . $e->getMessage();
		exit;
	}

}

/**
 * Geeft de juiste URL terug: relatief aan de website root url
 * Bijvoorbeeld voor de homepage: echo url('/');
 *
 * @param $path
 *
 * @return string
 */
function site_url( $path = '' ) {
	return get_config( 'BASE_URL' ) . $path;
}

function get_config( $name ) {
	$config = require __DIR__ . '/config.php';
	$name   = strtoupper( $name );

	if ( isset( $config[ $name ] ) ) {
		return $config[ $name ];
	}

	throw new \InvalidArgumentException( 'Er bestaat geen instelling met de key: ' . $name );
}

/**
 * Hier maken we de template engine en vertellen de template engine waar de templates/views staan
 * @return \League\Plates\Engine
 */
function get_template_engine() {

	$templates_path = get_config( 'PRIVATE' ) . '/views';

	return new League\Plates\Engine( $templates_path );

}

/**
 * Geef de naam (name) van de route aan deze functie, en de functie geeft
 * terug of dat de route is waar je nu bent
 *
 * @param $name
 *
 * @return bool
 */
function current_route_is( $name ) {
	$route = request()->getLoadedRoute();

	if ( $route ) {
		return $route->hasName( $name );
	}

	return false;
}

function getSwiftMailer()
{
	$mail_config = get_config('MAIL');
	$transport   = new \Swift_SmtpTransport($mail_config['SMTP_HOST'], $mail_config['SMTP_PORT']);

	if (!empty($mail_config['SMTP_USER'])) {
		$transport->setUsername($mail_config['SMTP_USER']);
		$transport->setPassword($mail_config['SMTP_PASSWORD']);
	}

	$mailer = new \Swift_Mailer($transport);

	return $mailer;
}

function createEmailMessage($to, $subject, $from_name, $from_email)
{

	// Create a message
	$message = new \Swift_Message($subject);
	$message->setFrom([$from_email => $from_email]);
	$message->setTo($to);

	// Send the message
	return $message;
}

function validate($data) {
	$errors = [];

	$username   = filter_var($data['username']);
	$wachtwoord = trim($data['wachtwoord']);

	if ($username === false) {
		$errors['username'] = 'Geen geldige gebruikersnaam!';
	}

	if (empty($wachtwoord) || strlen($wachtwoord) < 6) {
		$errors['wachtwoord'] = 'Geen geldig wachtwoord!';
	}
	$data = [
		'username' => $data['username'],
		'wachtwoord' => $wachtwoord
	];

	return [
		'data' => $data,
		'errors' => $errors
	];
}

function loginCheck() {
	if(!isset($_SESSION['user_id'])) {
		$redirectLogin = url('home');
		redirect($redirectLogin);
	}
}
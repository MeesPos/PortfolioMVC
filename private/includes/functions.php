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
function dbConnect()
{

	$config = get_config('DB');

	try {
		$dsn = 'mysql:host=' . $config['HOSTNAME'] . ';dbname=' . $config['DATABASE'] . ';charset=utf8';

		$connection = new PDO($dsn, $config['USER'], $config['PASSWORD']);
		$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

		return $connection;
	} catch (\PDOException $e) {
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
function site_url($path = '')
{
	return get_config('BASE_URL') . $path;
}

function get_config($name)
{
	$config = require __DIR__ . '/config.php';
	$name   = strtoupper($name);

	if (isset($config[$name])) {
		return $config[$name];
	}

	throw new \InvalidArgumentException('Er bestaat geen instelling met de key: ' . $name);
}

/**
 * Hier maken we de template engine en vertellen de template engine waar de templates/views staan
 * @return \League\Plates\Engine
 */
function get_template_engine()
{

	$templates_path = get_config('PRIVATE') . '/views';

	return new League\Plates\Engine($templates_path);
}

/**
 * Geef de naam (name) van de route aan deze functie, en de functie geeft
 * terug of dat de route is waar je nu bent
 *
 * @param $name
 *
 * @return bool
 */
function current_route_is($name)
{
	$route = request()->getLoadedRoute();

	if ($route) {
		return $route->hasName($name);
	}

	return false;
}

function current_route() {
	$route = request()->getLoadedRoute();

	if($route) {
		return $route;
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

function validate($data)
{
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

function loginCheck()
{
	if (!isset($_SESSION['user_id'])) {
		$redirectLogin = url('home');
		redirect($redirectLogin);
	}
}

function uploadHeaderImage($myfile, $errors){
	if (!isset($_FILES['myfile'])) {
		$message = "Geen bestand geupload!";
		echo "<script type='text/javascript'>alert('$message');</script>";
		exit;
	}

	$file_error = $myfile['myfile']['error'];
	switch ($file_error) {
		case UPLOAD_ERR_OK:
			break;
		case UPLOAD_ERR_NO_FILE:
			$errors['myfile'] = 'Er is geen bestand geupload';
			break;
		case UPLOAD_ERR_CANT_WRITE:
			$errors['myfile'] = 'Kan niet schrijven naar disk';
			break;
		case UPLOAD_ERR_INI_SIZE:
		case UPLOAD_ERR_FORM_SIZE:
			$errors['myfile'] = 'Dit bestand is te groot, pas php.ini aan';
			break;
		default:
			$errors['myfile'] = 'Onbekende fout';
	}

	if (count($errors) === 0) {

		$file_name = $myfile['myfile']['name'];
		$file_size = $myfile['myfile']['size'];
		$file_tmp = $myfile['myfile']['tmp_name'];
		$file_type = $myfile['myfile']['type'];

		$valid_image_types = [
			2 => 'jpg',
			3 => 'png'
		];
		$image_type        = exif_imagetype($file_tmp);
		if ($image_type !== false) {
			$file_extension = $valid_image_types[$image_type];
		} else {
			$errors['myfile'] = 'Dit is geen afbeelding!';
		}
	}

	if (count($errors) === 0) {
		$new_filename   = sha1_file($file_tmp) . '.' . $file_extension;
		$final_filename = 'img/postImages/headers/' . $new_filename;
		move_uploaded_file($file_tmp, $final_filename); // dus van tijdelijke bestandsnaam naar de originele naam (in de huidige map);

		return $new_filename;
	}
}

function limit_text($text, $limit)
{
	if (str_word_count($text, 0) > $limit) {
		$words = str_word_count($text, 2);
		$pos   = array_keys($words);
		$text  = substr($text, 0, $pos[$limit]) . '...';
	}
	return $text;
}

function uploadAllImages(){
	$fileNames = array();

	for ($i = 0; $i < count($_FILES["projectimages"]["name"]); $i++) {
		$uploadfile = $_FILES["projectimages"]["tmp_name"][$i];

		$valid_image_types = [
			2 => 'jpg',
			3 => 'png'
		];
		$image_type        = exif_imagetype($uploadfile);
		if ($image_type !== false) {
			$file_extension = $valid_image_types[$image_type];
		} else {
			$errors['myfile'] = 'Dit is geen afbeelding!';
		}

		$new_filename   = sha1_file($uploadfile) . '.' . $file_extension;
		$final_filename = 'img/projectImages/' . $new_filename;
		move_uploaded_file($uploadfile, $final_filename);

		$fileNames[] = $new_filename;
	}

	return array($fileNames);
}

function languageSwitch() {
	if(!isset($_SESSION['lang'])) {
		$_SESSION['lang'] = "nl";
	} else if(isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])) {
		if($_GET['lang'] == "nl") {
			$_SESSION['lang'] = "nl";
		} else if($_GET['lang'] == "en"){
			$_SESSION['lang'] = "en";
		}
	}
}

function getContentCurrentLang($place, $content) {
	foreach($content as $row) {
		if($place === $row['name']) {
			echo $row['content_' . $_SESSION['lang']];
		}
	} 
}
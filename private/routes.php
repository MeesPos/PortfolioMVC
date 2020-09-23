<?php

use Pecee\Http\Request;
use Pecee\SimpleRouter\Exceptions\NotFoundHttpException;
use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::setDefaultNamespace( 'Website\Controllers' );

SimpleRouter::group( [ 'prefix' => site_url() ], function () {

	SimpleRouter::get( '/', 'WebsiteController@home' )->name( 'home' );
	SimpleRouter::get( '/over-mij', 'WebsiteController@about' )->name( 'over' );

	// Contact Routes
	SimpleRouter::get( '/contact', 'ContactController@contact' )->name( 'contact' );
	SimpleRouter::post( '/contact/submit', 'ContactController@contactSend' )->name ( 'contactSend' );
	SimpleRouter::get( '/contact/verstuurd', 'ContactController@contactBedankt' )->name( 'contactBedankt' );

	// Projecten Routes
	SimpleRouter::get( '/projecten', 'ProjectenController@projecten')->name( 'projecten' );
	SimpleRouter::get( '/projecten/{link}', 'ProjectenController@projectenDetail')->name( 'projectenDetail' );

	// Tutorial Routes
	SimpleRouter::get( '/tutorials', 'TutorialController@tutorials')->name( 'tutorials' );
	SimpleRouter::get( '/tutorials/{link}', 'TutorialController@tutorialDetail')->name( 'tutorialDetail' );

	SimpleRouter::get( '/not-found', function () {
		http_response_code( 404 );

		return '404 Page not Found';
	} );

} );

SimpleRouter::error( function ( Request $request, \Exception $exception ) {
	if ( $exception instanceof NotFoundHttpException && $exception->getCode() === 404 ) {
		response()->redirect( site_url() . '/not-found' );
	}

} );
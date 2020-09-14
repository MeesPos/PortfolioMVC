<?php

use Pecee\Http\Request;
use Pecee\SimpleRouter\Exceptions\NotFoundHttpException;
use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::setDefaultNamespace( 'Website\Controllers' );

SimpleRouter::group( [ 'prefix' => site_url() ], function () {

	// START: Zet hier al eigen routes
	// Lees de docs, daar zie je hoe je routes kunt maken: https://github.com/skipperbent/simple-php-router#routes

	SimpleRouter::get( '/', 'WebsiteController@home' )->name( 'home' );
	SimpleRouter::get( '/over-mij', 'WebsiteController@about' )->name( 'over' );

	// Contact Routes
	SimpleRouter::get( '/contact', 'ContactController@contact' )->name( 'contact' );
	SimpleRouter::post( '/contact/submit', 'ContactController@contactSend' )->name ( 'contactSend' );
	SimpleRouter::get( '/contact/verstuurd', 'ContactController@contactBedankt' )->name( 'contactBedankt' );

	// Projecten Routes
	SimpleRouter::get( '/projecten', 'ProjectenController@projecten')->name( 'projecten' );
	SimpleRouter::get( '/projecten/{naam}', 'ProjectenController@projectenDetail')->name( 'projectenDetail' );

	// STOP: Tot hier al je eigen URL's zetten
	SimpleRouter::get( '/not-found', function () {
		http_response_code( 404 );

		return '404 Page not Found';
	} );

} );

// Dit zorgt er voor dat bij een niet bestaande route, de 404 pagina wordt getoond
SimpleRouter::error( function ( Request $request, \Exception $exception ) {
	if ( $exception instanceof NotFoundHttpException && $exception->getCode() === 404 ) {
		response()->redirect( site_url() . '/not-found' );
	}

} );
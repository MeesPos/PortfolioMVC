<?php

use Pecee\Http\Request;
use Pecee\SimpleRouter\Exceptions\NotFoundHttpException;
use Pecee\SimpleRouter\SimpleRouter;
use Website\Controllers\AdminController;

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
	SimpleRouter::get( '/tutorials/{link}', 'TutorialController@tutorialDetail', ['defaultParameterRegex' => '[\w\-]+'])->name( 'tutorialDetail' );

	// Admin Routes
	SimpleRouter::get( '/admin', 'AdminController@admin')->name('admin');
	SimpleRouter::get( '/admin/login', 'AdminController@loginPage')->name( 'loginPage' );
	SimpleRouter::post('/admin/login/verwerken','AdminController@adminLogin')->name('adminLogin');
	SimpleRouter::get( '/admin/post/maken', 'AdminController@adminPostMaken')->name('adminPostMaken');
	SimpleRouter::post('/admin/post/jwt', 'AdminController@jwt')->name('jwt');
	SimpleRouter::post('/admin/post/upload', 'AdminController@uploadPost')->name('uploadPost');
	SimpleRouter::get('/admin/posts', 'AdminController@allPosts')->name('allPosts');
	SimpleRouter::get( '/admin/taken', 'AdminController@adminTaken')->name('adminTaken');

	// Post editen/verwijderen
	SimpleRouter::get('/admin/posts/verwijderen/{id}', 'AdminController@deletePost')->name('deletePost');
	SimpleRouter::get('/admin/posts/wijzigen/{id}', 'AdminController@wijzigPost')->name('wijzigPost');

	// Takenlijst verwerkingen
	SimpleRouter::post( '/admin/taken/add', 'AdminController@addTask')->name('addTask');
	SimpleRouter::post( '/admin/taken/delete', 'AdminController@deleteTask')->name('deleteTask');
	SimpleRouter::post( '/admin/taken/update', 'AdminController@updateTask')->name('updateTask');

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
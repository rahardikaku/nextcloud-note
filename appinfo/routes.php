<?php
declare(strict_types=1);
$requirements = [
    'apiVersion' => 'v1',
];
// SPDX-FileCopyrightText: Ano Rangga Rahardika <rahardikaku@gmail.com>
// SPDX-License-Identifier: AGPL-3.0-or-later

/**
 * Create your routes in here. The name is the lowercase name of the controller
 * without the controller part, the stuff after the hash is the method.
 * e.g. page#index -> OCA\NoteBook\Controller\PageController->index()
 *
 * The controller class has to be registered in the application.php file since
 * it's instantiated in there
 */

return [
    'routes' => [
        ['name' => 'page#index', 'url' => '/', 'verb' => 'GET'],
		['name' => 'config#setConfig', 'url' => '/config', 'verb' => 'PUT'],
    ],
	'ocs' => [
        ['name' => 'notes#getUserNotes', 'url' => '/api/{apiVersion}/notes', 'verb' => 'GET', 'requirements' => $requirements],
        ['name' => 'notes#exportUserNote', 'url' => '/api/{apiVersion}/notes/{id}/export', 'verb' => 'GET', 'requirements' => $requirements],
        ['name' => 'notes#addUserNote', 'url' => '/api/{apiVersion}/notes', 'verb' => 'POST', 'requirements' => $requirements],
        ['name' => 'notes#editUserNote', 'url' => '/api/{apiVersion}/notes/{id}', 'verb' => 'PUT', 'requirements' => $requirements],
        ['name' => 'notes#deleteUserNote', 'url' => '/api/{apiVersion}/notes/{id}', 'verb' => 'DELETE', 'requirements' => $requirements],
    ],
];

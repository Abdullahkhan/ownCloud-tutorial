<?php
//check if the user is logged in
OCP\User::checkLoggedIn();
//check if the app is enabled at all
OCP\App::checkAppEnabled('notes');

//add a CSS file - /notes/css/styles.css
OCP\Util::addStyle('notes', 'styles');
//add a javaScript file - /notes/js/scripts.js
OCP\Util::addscript('notes','scripts');

//enable the navigation entry of your app
OCP\App::setActiveNavigationEntry('notes_index');

//make simple use of our template class
// @1st param - appid
// @2nd param - name of the template file within /notes/templates
// @3nd param - kind of the template
$tmpl = new OCP\Template('notes', 'notes', 'user');
//show the page
$tmpl->printPage();
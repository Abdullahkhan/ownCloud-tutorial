Write your first app
====================
The following tutorial will teach you, how to develop a simple notes app.
The __appID__ will be __notes__.

Let's get started
-----------------
1. Create the apps folder and folder structure.

	```
	mkdir notes && cd notes && mkdir ajax appinfo css img js l10n lib templates && touch index.php appinfo/app.php appinfo/info.xml appinfo/version templates/notes.php
	```
	
	The above commands create a folder called notes with the subfolders: 
	
		* ajax      - folder for all ajax files
		* appinfo   - contains information about the app used by ownCloud
		* css       - folder for all css files
		* img       - folder for all images
		* js        - folder for all 
		* l10n      - folder for the language files
		* lib       - folder for libraries
		* templates - folder for template files
		
	Additionally, it creates five empty files.
	
		* index.php
		* appinfo/app.php     - things that are necessary on every call
		* appinfo/info.xml    - necessary information about the app
		* appinfo/version     - version of the app
		* templates/notes.php - template file for our index.php
		
2. Let's fill the files with some content.

	__index.php__
	
	```php
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
	```
	__appinfo/app.php__
	
	```php
	<?php
	//give ownCloud the path of your app's classes
	OC::$CLASSPATH['OC_Notes'] = 'apps/notes/lib/notes.php';
	
	//add a navigation entry in ownCloud's sidebar
	//the OCP namespace is our public API, which we will take a look on in chapter 3
	OCP\App::addNavigationEntry( array(
		'id' => 'notes_index',
		'order' => 10,
		'href' => OCP\Util::linkTo('notes', 'index.php'),
		'icon' => OCP\Util::imagePath('notes', 'icon.svg'),
		'name' => 'Notes'));
	```
	__appinfo/info.xml__
	
	```xml
	<?xml version="1.0"?> 
	<info>
		<id>notes</id>
		<name>Notes</name>
		<licence>AGPL</licence>
		<author>Your Name</author>
		<require>4</require>
		<shipped>true</shipped>
		<description>Simple notes app</description>
	</info>
	```
	__appinfo/version__
	
	```
	0.1
	```
	__lib/notes.php__
	```php
	<?php
	//create a namespace for your app
	//OCA = ownCloud App namespace
	namespace OCA\Notes;
	
	class Notes{
		
	}	
	```
	__templates/notes.php__
	
	```html
	<p>You done it! This is your first ownCloud app :)</p>
	```

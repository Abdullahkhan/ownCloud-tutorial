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
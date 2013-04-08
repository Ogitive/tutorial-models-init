<?php

use Phalcon\Events\Manager as EventsManager,
	Phalcon\Mvc\Model\Manager as ModelsManager,
	Phalcon\Mvc\Model\MetaData\Files as MetaDataAdapter,
	Phalcon\Annotations\Adapter\Files as AnnotationsAdapter,
	Phalcon\Db\Adapter\Pdo\Sqlite as DbAdapter;

$di = new \Phalcon\DI();

//Setup a connection
$di['db'] = function() {

	$connection = new DbAdapter(array(
    	"dbname" => "db/sample.db"
	));

	//$connection->execute('CREATE TABLE my_robots (my_id integer primary key, my_name varchar(120) not null, my_type varchar(32) not null, my_year int not null)');
	//$connection->execute('CREATE TABLE my_robots_parts (my_id integer primary key, my_robots_id int not null, my_parts_id int not null)');
	//$connection->execute('CREATE TABLE my_parts (my_id integer primary key, my_name varchar(120) not null)');

	return $connection;
};

//Set a models manager
$di['modelsManager'] = function() {

	$eventsManager = new EventsManager();

	$modelsManager = new ModelsManager();

	$modelsManager->setEventsManager($eventsManager);

	//Attach a listener to models-manager
	$eventsManager->attach('modelsManager', new AnnotationsInitializer());

	return $modelsManager;
};

$di['modelsMetadata'] = function() {

    //Use the memory meta-data adapter in development
    $metaData = new MetaDataAdapter(array(
    	'metaDataDir' => './cache/meta-data/'
    ));

    //Set a custom meta-data database introspection
	$metaData->setStrategy(new AnnotationsMetaDataInitializer());

    return $metaData;
};

$di['annotations'] = function() {
	return new AnnotationsAdapter(array(
		'annotationsDir' => './cache/annotations/'
	));
};

<?php

require 'services.php';

require 'library/AnnotationsInitializer.php';
require 'library/AnnotationsMetaDataInitializer.php';

require 'models/Robots.php';
require 'models/RobotsParts.php';
require 'models/Parts.php';

try {

	$robot = Robots::findFirst();

	foreach ($robot->robotsParts as $robotPart) {
		echo $robotPart->part->name, '<br>';
	}

} catch (Exception $e) {
	echo $e->getMessage(), '<br>';
	echo nl2br($e->getTraceAsString());
}


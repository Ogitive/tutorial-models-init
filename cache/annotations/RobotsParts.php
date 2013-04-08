<?php return Phalcon\Annotations\Reflection::__set_state(array(
   '_reflectionData' => 
  array (
    'class' => 
    array (
      0 => 
      array (
        'type' => 300,
        'name' => 'Source',
        'arguments' => 
        array (
          0 => 
          array (
            'expr' => 
            array (
              'type' => 303,
              'value' => 'my_robots_parts',
            ),
          ),
        ),
        'file' => 'C:\\xampp\\htdocs\\tutorial-models-init\\models\\RobotsParts.php',
        'line' => 4,
      ),
      1 => 
      array (
        'type' => 300,
        'name' => 'BelongsTo',
        'arguments' => 
        array (
          0 => 
          array (
            'expr' => 
            array (
              'type' => 303,
              'value' => 'robotsId',
            ),
          ),
          1 => 
          array (
            'expr' => 
            array (
              'type' => 303,
              'value' => 'Robots',
            ),
          ),
          2 => 
          array (
            'expr' => 
            array (
              'type' => 303,
              'value' => 'id',
            ),
          ),
          3 => 
          array (
            'expr' => 
            array (
              'type' => 308,
              'items' => 
              array (
                0 => 
                array (
                  'expr' => 
                  array (
                    'type' => 303,
                    'value' => 'robot',
                  ),
                  'name' => 'alias',
                ),
              ),
            ),
          ),
        ),
        'file' => 'C:\\xampp\\htdocs\\tutorial-models-init\\models\\RobotsParts.php',
        'line' => 6,
      ),
      2 => 
      array (
        'type' => 300,
        'name' => 'BelongsTo',
        'arguments' => 
        array (
          0 => 
          array (
            'expr' => 
            array (
              'type' => 303,
              'value' => 'partsId',
            ),
          ),
          1 => 
          array (
            'expr' => 
            array (
              'type' => 303,
              'value' => 'Parts',
            ),
          ),
          2 => 
          array (
            'expr' => 
            array (
              'type' => 303,
              'value' => 'id',
            ),
          ),
          3 => 
          array (
            'expr' => 
            array (
              'type' => 308,
              'items' => 
              array (
                0 => 
                array (
                  'expr' => 
                  array (
                    'type' => 303,
                    'value' => 'part',
                  ),
                  'name' => 'alias',
                ),
              ),
            ),
          ),
        ),
        'file' => 'C:\\xampp\\htdocs\\tutorial-models-init\\models\\RobotsParts.php',
        'line' => 8,
      ),
    ),
    'properties' => 
    array (
      'id' => 
      array (
        0 => 
        array (
          'type' => 300,
          'name' => 'Primary',
          'file' => 'C:\\xampp\\htdocs\\tutorial-models-init\\models\\RobotsParts.php',
          'line' => -3,
        ),
        1 => 
        array (
          'type' => 300,
          'name' => 'Identity',
          'file' => 'C:\\xampp\\htdocs\\tutorial-models-init\\models\\RobotsParts.php',
          'line' => -3,
        ),
        2 => 
        array (
          'type' => 300,
          'name' => 'Column',
          'arguments' => 
          array (
            0 => 
            array (
              'expr' => 
              array (
                'type' => 303,
                'value' => 'integer',
              ),
              'name' => 'type',
            ),
            1 => 
            array (
              'expr' => 
              array (
                'type' => 305,
              ),
              'name' => 'nullable',
            ),
            2 => 
            array (
              'expr' => 
              array (
                'type' => 303,
                'value' => 'my_id',
              ),
              'name' => 'column',
            ),
          ),
          'file' => 'C:\\xampp\\htdocs\\tutorial-models-init\\models\\RobotsParts.php',
          'line' => -3,
        ),
      ),
      'robotsId' => 
      array (
        0 => 
        array (
          'type' => 300,
          'name' => 'Column',
          'arguments' => 
          array (
            0 => 
            array (
              'expr' => 
              array (
                'type' => 303,
                'value' => 'integer',
              ),
              'name' => 'type',
            ),
            1 => 
            array (
              'expr' => 
              array (
                'type' => 305,
              ),
              'name' => 'nullable',
            ),
            2 => 
            array (
              'expr' => 
              array (
                'type' => 303,
                'value' => 'my_robots_id',
              ),
              'name' => 'column',
            ),
          ),
          'file' => 'C:\\xampp\\htdocs\\tutorial-models-init\\models\\RobotsParts.php',
          'line' => -1,
        ),
      ),
      'partsId' => 
      array (
        0 => 
        array (
          'type' => 300,
          'name' => 'Column',
          'arguments' => 
          array (
            0 => 
            array (
              'expr' => 
              array (
                'type' => 303,
                'value' => 'integer',
              ),
              'name' => 'type',
            ),
            1 => 
            array (
              'expr' => 
              array (
                'type' => 305,
              ),
              'name' => 'nullable',
            ),
            2 => 
            array (
              'expr' => 
              array (
                'type' => 303,
                'value' => 'my_parts_id',
              ),
              'name' => 'column',
            ),
          ),
          'file' => 'C:\\xampp\\htdocs\\tutorial-models-init\\models\\RobotsParts.php',
          'line' => -1,
        ),
      ),
    ),
  ),
   '_classAnnotations' => NULL,
   '_methodAnnotations' => NULL,
   '_propertyAnnotations' => NULL,
)); 
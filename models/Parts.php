<?php

/**
 * Parts
 *
 * Represents every part to assemble a robot
 *
 * @Source('my_parts');
 * @HasMany("id", "RobotsParts", "robotsId")
 */
class Parts extends \Phalcon\Mvc\Model
{
	/**
     * @Primary
     * @Identity
     * @Column(type="integer", nullable=false, column="my_id")
     */
	public $id;

	/**
	 * @Column(type="string", nullable=false, column="my_name")
	 */
	public $name;

}
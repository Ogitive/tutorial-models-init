<?php

/**
 * Robots
 *
 * Represents a robot
 *
 * @Source('my_robots');
 * @HasMany("id", "RobotsParts", "robotsId")
 */
class Robots extends \Phalcon\Mvc\Model
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

	/**
     * @Column(type="string", nullable=false, column="my_type")
     */
	public $type;

	/**
     * @Column(type="integer", nullable=false, column="my_year")
     */
	public $year;

}
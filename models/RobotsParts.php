<?php

/**
 * RobotsParts
 *
 * Model robotsParts
 *
 * @Source('my_robots_parts');
 * @BelongsTo('robotsId', 'Robots', 'id', {
 *    'alias': 'robot'
 * });
 * @BelongsTo('partsId', 'Parts', 'id', {
 *    'alias': 'part'
 * });
 */
class RobotsParts extends \Phalcon\Mvc\Model
{
	/**
     * @Primary
     * @Identity
     * @Column(type="integer", nullable=false, column="my_id")
     */
	public $id;

	/**
	 * @Column(type="integer", nullable=false, column="my_robots_id")
	 */
	public $robotsId;

	/**
     * @Column(type="integer", nullable=false, column="my_parts_id")
     */
	public $partsId;

}
<?php
namespace RideSocial\Bundle\EventBundle\Traits\ORM;

trait HasPassengersTrait
{
	/**
	* @ORM\OneToMany(targetEntity="RideSocial\Bundle\EventBundle\Entity\Passenger")
	*/
	protected $passengers;

	/**
	 * @{inheritdoc}
	 */
	public function getPassengers()
	{
		return $this->passengers;
	}

	/**
	 * @{inheritdoc}
	 */
	public function getPassenger($passenger)
	{
		return parent::getPassenger($passenger);
	}

	/**
	 * @{inheritdoc}
	 * @return  RideSocial\Bundle\EventBundle\Entity\Driver
	 */
	public function setPassengers(array $passengers)
	{
		return parent::setPassengers($passengers);
	}

	/**
	 * @{inheritdoc}
	 */
	public function addPassenger(RideSocial\Bundle\EventBundle\Entity\Passenger $passenger)
	{
		return parent::addPassenger($passenger);
	}

	/**
	 * @{inheritdoc}
	 */
	public function hasPassenger($passenger)
	{
		return parent::hasPassenger($passenger);
	}

	/**
	 * @{inheritdoc}
	 */
	public function removePassenger(RideSocial\Bundle\EventBundle\Entity\Passenger $passenger)
	{
		unset($this->passengers[$passenger]);
	}
}
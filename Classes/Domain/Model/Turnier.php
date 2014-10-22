<?php
namespace DavidVaupel\TennisTurnier\Domain\Model;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2014
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Turnier
 */
class Turnier extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * Name des Turniers
	 * 
	 * @var string
	 * @validate NotEmpty
	 */
	protected $name = '';

	/**
	 * Wann findet das Turnier statt.
	 * 
	 * @var \DateTime
	 * @validate NotEmpty
	 */
	protected $datum = NULL;

	/**
	 * Wo findet das Turnier statt.
	 * 
	 * @var string
	 * @validate NotEmpty
	 */
	protected $ort = '';

	/**
	 * Ein Turnier kann viele Spieler haben.
	 * 
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\DavidVaupel\TennisTurnier\Domain\Model\Spieler>
	 * @cascade remove
	 */
	protected $spieler = NULL;

	/**
	 * __construct
	 */
	public function __construct() {
		//Do not remove the next line: It would break the functionality
		$this->initStorageObjects();
	}

	/**
	 * Initializes all ObjectStorage properties
	 * Do not modify this method!
	 * It will be rewritten on each save in the extension builder
	 * You may modify the constructor of this class instead
	 * 
	 * @return void
	 */
	protected function initStorageObjects() {
		$this->spieler = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}

	/**
	 * Returns the name
	 * 
	 * @return string $name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets the name
	 * 
	 * @param string $name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * Returns the datum
	 * 
	 * @return \DateTime $datum
	 */
	public function getDatum() {
		return $this->datum;
	}

	/**
	 * Sets the datum
	 * 
	 * @param \DateTime $datum
	 * @return void
	 */
	public function setDatum(\DateTime $datum) {
		$this->datum = $datum;
	}

	/**
	 * Returns the ort
	 * 
	 * @return string $ort
	 */
	public function getOrt() {
		return $this->ort;
	}

	/**
	 * Sets the ort
	 * 
	 * @param string $ort
	 * @return void
	 */
	public function setOrt($ort) {
		$this->ort = $ort;
	}

	/**
	 * Adds a Spieler
	 * 
	 * @param \DavidVaupel\TennisTurnier\Domain\Model\Spieler $spieler
	 * @return void
	 */
	public function addSpieler(\DavidVaupel\TennisTurnier\Domain\Model\Spieler $spieler) {
		$this->spieler->attach($spieler);
	}

	/**
	 * Removes a Spieler
	 * 
	 * @param \DavidVaupel\TennisTurnier\Domain\Model\Spieler $spielerToRemove The Spieler to be removed
	 * @return void
	 */
	public function removeSpieler(\DavidVaupel\TennisTurnier\Domain\Model\Spieler $spielerToRemove) {
		$this->spieler->detach($spielerToRemove);
	}

	/**
	 * Returns the spieler
	 * 
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\DavidVaupel\TennisTurnier\Domain\Model\Spieler> $spieler
	 */
	public function getSpieler() {
		return $this->spieler;
	}

	/**
	 * Sets the spieler
	 * 
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\DavidVaupel\TennisTurnier\Domain\Model\Spieler> $spieler
	 * @return void
	 */
	public function setSpieler(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $spieler) {
		$this->spieler = $spieler;
	}

}
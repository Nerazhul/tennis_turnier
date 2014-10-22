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
 * Spielmodus
 */
class Spielmodus extends \TYPO3\CMS\Extbase\DomainObject\AbstractValueObject {

	/**
	 * Einzel spielen
	 * 
	 * @var boolean
	 */
	protected $einzel = FALSE;

	/**
	 * Doppel spielen
	 * 
	 * @var boolean
	 */
	protected $doppel = FALSE;

	/**
	 * Mixed spielen.
	 * 
	 * @var boolean
	 */
	protected $mixed = FALSE;

	/**
	 * Returns the einzel
	 * 
	 * @return boolean $einzel
	 */
	public function getEinzel() {
		return $this->einzel;
	}

	/**
	 * Sets the einzel
	 * 
	 * @param boolean $einzel
	 * @return void
	 */
	public function setEinzel($einzel) {
		$this->einzel = $einzel;
	}

	/**
	 * Returns the boolean state of einzel
	 * 
	 * @return boolean
	 */
	public function isEinzel() {
		return $this->einzel;
	}

	/**
	 * Returns the doppel
	 * 
	 * @return boolean $doppel
	 */
	public function getDoppel() {
		return $this->doppel;
	}

	/**
	 * Sets the doppel
	 * 
	 * @param boolean $doppel
	 * @return void
	 */
	public function setDoppel($doppel) {
		$this->doppel = $doppel;
	}

	/**
	 * Returns the boolean state of doppel
	 * 
	 * @return boolean
	 */
	public function isDoppel() {
		return $this->doppel;
	}

	/**
	 * Returns the mixed
	 * 
	 * @return boolean $mixed
	 */
	public function getMixed() {
		return $this->mixed;
	}

	/**
	 * Sets the mixed
	 * 
	 * @param boolean $mixed
	 * @return void
	 */
	public function setMixed($mixed) {
		$this->mixed = $mixed;
	}

	/**
	 * Returns the boolean state of mixed
	 * 
	 * @return boolean
	 */
	public function isMixed() {
		return $this->mixed;
	}

}
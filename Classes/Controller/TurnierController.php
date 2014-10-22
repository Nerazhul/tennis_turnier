<?php
namespace DavidVaupel\TennisTurnier\Controller;


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
 * TurnierController
 */
class TurnierController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * turnierRepository
	 * 
	 * @var \DavidVaupel\TennisTurnier\Domain\Repository\TurnierRepository
	 * @inject
	 */
	protected $turnierRepository = NULL;

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$turniers = $this->turnierRepository->findAll();
		$this->view->assign('turniers', $turniers);
	}

	/**
	 * action show
	 * 
	 * @param \DavidVaupel\TennisTurnier\Domain\Model\Turnier $turnier
	 * @return void
	 */
	public function showAction(\DavidVaupel\TennisTurnier\Domain\Model\Turnier $turnier) {
		$this->view->assign('turnier', $turnier);
	}

	/**
	 * action new
	 * 
	 * @param \DavidVaupel\TennisTurnier\Domain\Model\Turnier $newTurnier
	 * @ignorevalidation $newTurnier
	 * @return void
	 */
	public function newAction(\DavidVaupel\TennisTurnier\Domain\Model\Turnier $newTurnier = NULL) {
		$this->view->assign('newTurnier', $newTurnier);
	}

	/**
	 * action create
	 * 
	 * @param \DavidVaupel\TennisTurnier\Domain\Model\Turnier $newTurnier
	 * @return void
	 */
	public function createAction(\DavidVaupel\TennisTurnier\Domain\Model\Turnier $newTurnier) {
		$this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->turnierRepository->add($newTurnier);
		$this->redirect('list');
	}

	/**
	 * action edit
	 * 
	 * @param \DavidVaupel\TennisTurnier\Domain\Model\Turnier $turnier
	 * @ignorevalidation $turnier
	 * @return void
	 */
	public function editAction(\DavidVaupel\TennisTurnier\Domain\Model\Turnier $turnier) {
		$this->view->assign('turnier', $turnier);
	}

	/**
	 * action update
	 * 
	 * @param \DavidVaupel\TennisTurnier\Domain\Model\Turnier $turnier
	 * @return void
	 */
	public function updateAction(\DavidVaupel\TennisTurnier\Domain\Model\Turnier $turnier) {
		$this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->turnierRepository->update($turnier);
		$this->redirect('list');
	}

	/**
	 * action delete
	 * 
	 * @param \DavidVaupel\TennisTurnier\Domain\Model\Turnier $turnier
	 * @return void
	 */
	public function deleteAction(\DavidVaupel\TennisTurnier\Domain\Model\Turnier $turnier) {
		$this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->turnierRepository->remove($turnier);
		$this->redirect('list');
	}

}
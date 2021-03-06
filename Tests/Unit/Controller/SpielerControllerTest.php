<?php
namespace DavidVaupel\TennisTurnier\Tests\Unit\Controller;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2014 
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class DavidVaupel\TennisTurnier\Controller\SpielerController.
 *
 */
class SpielerControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \DavidVaupel\TennisTurnier\Controller\SpielerController
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = $this->getMock('DavidVaupel\\TennisTurnier\\Controller\\SpielerController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllSpielersFromRepositoryAndAssignsThemToView() {

		$allSpielers = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$spielerRepository = $this->getMock('DavidVaupel\\TennisTurnier\\Domain\\Repository\\SpielerRepository', array('findAll'), array(), '', FALSE);
		$spielerRepository->expects($this->once())->method('findAll')->will($this->returnValue($allSpielers));
		$this->inject($this->subject, 'spielerRepository', $spielerRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('spielers', $allSpielers);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenSpielerToView() {
		$spieler = new \DavidVaupel\TennisTurnier\Domain\Model\Spieler();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('spieler', $spieler);

		$this->subject->showAction($spieler);
	}

	/**
	 * @test
	 */
	public function newActionAssignsTheGivenSpielerToView() {
		$spieler = new \DavidVaupel\TennisTurnier\Domain\Model\Spieler();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('newSpieler', $spieler);
		$this->inject($this->subject, 'view', $view);

		$this->subject->newAction($spieler);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenSpielerToSpielerRepository() {
		$spieler = new \DavidVaupel\TennisTurnier\Domain\Model\Spieler();

		$spielerRepository = $this->getMock('DavidVaupel\\TennisTurnier\\Domain\\Repository\\SpielerRepository', array('add'), array(), '', FALSE);
		$spielerRepository->expects($this->once())->method('add')->with($spieler);
		$this->inject($this->subject, 'spielerRepository', $spielerRepository);

		$this->subject->createAction($spieler);
	}

	/**
	 * @test
	 */
	public function editActionAssignsTheGivenSpielerToView() {
		$spieler = new \DavidVaupel\TennisTurnier\Domain\Model\Spieler();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('spieler', $spieler);

		$this->subject->editAction($spieler);
	}

	/**
	 * @test
	 */
	public function updateActionUpdatesTheGivenSpielerInSpielerRepository() {
		$spieler = new \DavidVaupel\TennisTurnier\Domain\Model\Spieler();

		$spielerRepository = $this->getMock('DavidVaupel\\TennisTurnier\\Domain\\Repository\\SpielerRepository', array('update'), array(), '', FALSE);
		$spielerRepository->expects($this->once())->method('update')->with($spieler);
		$this->inject($this->subject, 'spielerRepository', $spielerRepository);

		$this->subject->updateAction($spieler);
	}

	/**
	 * @test
	 */
	public function deleteActionRemovesTheGivenSpielerFromSpielerRepository() {
		$spieler = new \DavidVaupel\TennisTurnier\Domain\Model\Spieler();

		$spielerRepository = $this->getMock('DavidVaupel\\TennisTurnier\\Domain\\Repository\\SpielerRepository', array('remove'), array(), '', FALSE);
		$spielerRepository->expects($this->once())->method('remove')->with($spieler);
		$this->inject($this->subject, 'spielerRepository', $spielerRepository);

		$this->subject->deleteAction($spieler);
	}
}

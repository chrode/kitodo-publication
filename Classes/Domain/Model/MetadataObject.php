<?php
namespace EWW\Dpf\Domain\Model;

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
 * MetadataObject
 */
class MetadataObject extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * title
	 *
	 * @var string
	 */
	protected $title = '';

	/**
	 * maxIteration
	 *
	 * @var integer
	 */
	protected $maxIteration = 0;

	/**
	 * mandatory
	 *
	 * @var boolean
	 */
	protected $mandatory = FALSE;

	/**
	 * mapping
	 *
	 * @var string
	 */
	protected $mapping = '';

	/**
	 * metadataGroup
	 *
	 * @var \EWW\Dpf\Domain\Model\MetadataGroup
	 */
	protected $metadataGroup = NULL;

	/**
	 * Returns the title
	 *
	 * @return string $title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Sets the title
	 *
	 * @param string $title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * Returns the metadataGroup
	 *
	 * @return \EWW\Dpf\Domain\Model\MetadataGroup metadataGroup
	 */
	public function getMetadataGroup() {
		return $this->metadataGroup;
	}

	/**
	 * Sets the metadataGroup
	 *
	 * @param \EWW\Dpf\Domain\Model\MetadataGroup $metadataGroup
	 * @return \EWW\Dpf\Domain\Model\MetadataGroup metadataGroup
	 */
	public function setMetadataGroup(\EWW\Dpf\Domain\Model\MetadataGroup $metadataGroup) {
		$this->metadataGroup = $metadataGroup;
	}

	/**
	 * Returns the maxIteration
	 *
	 * @return integer $maxIteration
	 */
	public function getMaxIteration() {
		return $this->maxIteration;
	}

	/**
	 * Sets the maxIteration
	 *
	 * @param integer $maxIteration
	 * @return void
	 */
	public function setMaxIteration($maxIteration) {
		$this->maxIteration = $maxIteration;
	}

	/**
	 * Returns the mandatory
	 *
	 * @return boolean $mandatory
	 */
	public function getMandatory() {
		return $this->mandatory;
	}

	/**
	 * Sets the mandatory
	 *
	 * @param boolean $mandatory
	 * @return void
	 */
	public function setMandatory($mandatory) {
		$this->mandatory = $mandatory;
	}

	/**
	 * Returns the boolean state of mandatory
	 *
	 * @return boolean
	 */
	public function isMandatory() {
		return $this->mandatory;
	}

	/**
	 * Returns the mapping
	 *
	 * @return string $mapping
	 */
	public function getMapping() {
		return $this->mapping;
	}

	/**
	 * Sets the mapping
	 *
	 * @param string $mapping
	 * @return void
	 */
	public function setMapping($mapping) {
		$this->mapping = $mapping;
	}

}
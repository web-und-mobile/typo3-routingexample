<?php
namespace SchamsNet\Routingexample\Domain\Model;

/*
 * This file is part of the TYPO3 CMS Extension "Routing Example"
 * Extension author: Michael Schams - https://schams.net
 *
 * @package    TYPO3
 * @subpackage routingexample
 * @author     Michael Schams <schams.net>
 * @link       https://schams.net
 */

/**
 * Userlist Model
 */
class Userlist extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * @var \string
     * @validate NotEmpty
     */
    protected $username;

    /**
     * @return \string $username
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Sets the username
     *
     * @param \string $username
     * @return void
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }
}

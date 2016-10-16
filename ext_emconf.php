<?php

/*
 * This file is part of the TYPO3 CMS Extension "Routing Example"
 * Extension author: Michael Schams - https://schams.net
 *
 * @package    TYPO3
 * @subpackage routingexample
 * @author     Michael Schams <schams.net>
 * @link       https://schams.net
 */

$EM_CONF[$_EXTKEY] = array(
    'title' => 'Routing Example',
    'description' => '.',
    'category' => 'misc',
    'version' => '1.0.0',
    'state' => 'stable',
    'uploadfolder' => false,
    'createDirs' => '',
    'clearcacheonload' => false,
    'author' => 'Michael Schams',
    'author_email' => '',
    'author_company' => '',
    'constraints' =>
    array(
        'depends' => array(
            'php' => '5.3.3-7.0.99',
            'typo3' => '7.6.0-7.6.99',
            'routing' => '0.4.0-0.4.0'
        ),
        'conflicts' => array(
        ),
        'suggests' => array(
        )
    )
);

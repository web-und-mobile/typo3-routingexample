<?php
namespace SchamsNet\Routingexample\Controller;

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
 * Rest Controller
 */
class RestController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * Set default view to JSON output
     *
     * @access protected
     * @var object
     */
    protected $defaultViewObjectName = \TYPO3\CMS\Extbase\Mvc\View\JsonView::class;

    /**
     * User list repository
     *
     * @access protected
     * @var object
     */
    protected $userlistRepository = null;

    /**
     * Constructor
     *
     * @access public
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Inject user list repository
     *
     * @access public
     * @param \SchamsNet\Routingexample\Domain\Repository\UserlistRepository $userlistRepository
     * @return void
     */
    public function injectUserlistRepository(\SchamsNet\Routingexample\Domain\Repository\UserlistRepository
        $userlistRepository)
    {
        $this->userlistRepository = $userlistRepository;
    }

    /**
     * Retrieves user list from repository and passes data to JSON view
     *
     * @access public
     * @return void
     */
    public function userlistAction()
    {
        $userlist = $this->userlistRepository->findAll();
        $this->view->assign('userlist', $userlist);
        $this->view->setVariablesToRender(array('userlist'));
    }

    /**
     * Retrieves details of a specific user from repository and passes data to JSON view
     *
     * @access public
     * @return void
     */
    public function userdetailsAction()
    {
        $userdetails = array();
        if ($this->request->hasArgument('userid')) {
            $userid = intval($this->request->getArgument('userid'));
            $userdetails = $this->userlistRepository->findByUid($userid);
        }
        $this->view->assign('userdetails', $userdetails);
        $this->view->setVariablesToRender(array('userdetails'));
    }
}

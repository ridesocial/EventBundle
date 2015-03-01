<?php
namespace RideSocial\Bundle\EventBundle\Controller;

class PassengerController extends \RideSocial\Bundle\CoreBundle\Controller\Controller
{
    /**
     * Index action
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return mixed
     */
    public function indexAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        return parent::indexAction($request);
    }
    
    /**
     * New action
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return mixed
     */
    public function newAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        return parent::newAction($request);
    }
    
    /**
     * Show actino
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return mixed
     */
    public function showAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        return parent::showAction($request);
    }
    
    /**
     * Search action
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return mixed
     */
    public function searchAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        return parent::searchAction($request);
    }
}

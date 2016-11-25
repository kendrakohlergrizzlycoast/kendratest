<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

use AppBundle\Page\PageFlow;

class IndexController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function indexAction(Request $request)
    {
        $session = $request->getSession();
        //$logger = $this->get('logger');
        $cp = $request->get('cp');
        
        $pageFlow = new PageFlow($cp);
        $currentPage = $pageFlow->getCurrentPage();
        $session->set('currentPage',$currentPage);
        
        // replace this example code with whatever you need
        return $this->render("{$cp}/{$currentPage->getView()}.html.twig", ['foo' => 'bar', 'form' => $currentPage->getForm()]);
    }
}

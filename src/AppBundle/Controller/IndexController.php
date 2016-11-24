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
        //$session = $request->getSession();
        //$logger = $this->get('logger');
        $pageFlow = new PageFlow(1);
        
        echo "PAGE FLOW: " . print_r($pageFlow->getCurrentPage()->getView(),1);
        $cp = 1;
        
        // replace this example code with whatever you need
        return $this->render("{$cp}/{$pageFlow->getCurrentPage()->getView()}.html.twig", ['foo' => 'bar']);
    }
}

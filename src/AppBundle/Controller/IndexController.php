<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class IndexController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function indexAction(Request $request)
    {
        $session = $request->getSession();
        $logger = $this->get('logger');
        
        //$price = !$session->get('foo') ? 1 : $session->get('foo')+1;
        $price = 1;
        $session->set('foo',$price);
        $logger->error('??!?!?!?!?!?!FOO ISS: '.$session->get('foo'));
        $foo = ['foo' => $session->get('foo')];
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', $foo);
    }
}

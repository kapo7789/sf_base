<?php

namespace Kapo\Front\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/")
	 *
     */
    public function indexAction()
    {
    	$shit = array(
    			'stuff'=>'shit',
    			'stuff2'=>'shit2',
    			'stuff3'=>'shit3',
    		);
        return $this->render('FrontBundle:Default:index.html.php',array('shit'=>$shit));
    }

    /**
     * @Route("/stuff")
	 *
     */
    public function stuffAction()
    {
    	return new Response('shit');
    }
}
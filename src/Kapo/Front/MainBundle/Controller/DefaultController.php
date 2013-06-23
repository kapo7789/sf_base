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
     * @Route("/", name="home")
	 *
     */
    public function indexAction()
    {
        $cats = $this->getDoctrine()
                ->getRepository('FrontBundle:Category')
                ->findAll();
        return $this->render('FrontBundle:Default:index.html.php',array('cats'=>$cats));
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

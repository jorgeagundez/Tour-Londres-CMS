<?php

namespace TourLondres\GeneralBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/home")
     * @Template()
     */
    public function homeAction()
    {
    	$template = 'home';
        return array('template' => $template);
    }
}

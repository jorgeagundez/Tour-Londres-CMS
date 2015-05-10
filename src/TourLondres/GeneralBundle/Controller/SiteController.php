<?php

namespace TourLondres\GeneralBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class SiteController extends Controller
{
   
    public function staticAction($page, $_locale)
    {
    	$em = $this->getDoctrine()->getEntityManager();
    	$tours = $em->getRepository('TourLondresDashboardBundle:Tour')->findAll();

        return $this->render('GeneralBundle:Site:'. $_locale . '_' . $page .'.html.twig', array('template' => $page, 'tours' => $tours));
    }

}

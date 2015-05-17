<?php

namespace TourLondres\TourBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use TourLondres\DashboardBundle\Entity\Tour;


class PriceController extends Controller
{
  
     /**
     * @Route("/tour-private/price")
     * @Template()
     */
    public function showAction($_locale)
    {

        $em = $this->getDoctrine()->getEntityManager();
        $tours = $em->getRepository('TourLondresDashboardBundle:Tour')->findAll();
        $prices = $em->getRepository('TourLondresDashboardBundle:PreciosTour')->findAll();

        return $this->render('TourLondresTourBundle:Price:'. $_locale . '_show.html.twig', array( 'template' => 'prices', 'prices' => $prices, 'tours' => $tours));
    }

}

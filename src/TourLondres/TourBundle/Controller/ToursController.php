<?php

namespace TourLondres\TourBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use TourLondres\DashboardBundle\Entity\Tour;

class ToursController extends Controller
{
    /**
     * @Route("/tour/list")
     * @Template()
     */
    public function listAction($_locale)
    {
        $list = 'tourlist';
        return $this->render('TourLondresTourBundle:Tours:'. $_locale . '_list.html.twig', array('template' => $list));

    }

    /**
     * @Route("/tour/{id}")
     * @Template()
     * @ParamConverter("tour",  class="TourLondres\DashboardBundle\Entity\Tour")
     */
    public function showAction($_locale, Tour $tour)
    {

        $em = $this->getDoctrine()->getEntityManager();
        $tours = $em->getRepository('TourLondresDashboardBundle:Tour')->findAll();

        return $this->render('TourLondresTourBundle:Tours:'. $_locale . '_show.html.twig', array( 'template' => 'tourTemplate', 'currentTour' => $tour, 'tours' => $tours));
    }


}

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
     * @Route("/tour-private/about")
     * @Template()
     */
    public function listAction($_locale)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $tours = $em->getRepository('TourLondresDashboardBundle:Tour')->findAll();
        $about = $em->getRepository('TourLondresDashboardBundle:About')->findAll();

        $list = 'tourlist';
        return $this->render('TourLondresTourBundle:Tours:'. $_locale . '_list.html.twig', array('template' => $list, 'tours' => $tours, 'about' => $about));

    }

    /**
     * @Route("/tour-private/{id}")
     * @Template()
     * @ParamConverter("tour",  class="TourLondres\DashboardBundle\Entity\Tour")
     */
    public function privateshowAction($_locale, Tour $tour)
    {

        $em = $this->getDoctrine()->getEntityManager();
        $tours = $em->getRepository('TourLondresDashboardBundle:Tour')->findAll();

        return $this->render('TourLondresTourBundle:Tours:'. $_locale . '_private_show.html.twig', array( 'template' => 'tourTemplate', 'currentTour' => $tour, 'tours' => $tours));
    }

    /**
     * @Route("/tour-semanal/{id}")
     * @Template()
     * @ParamConverter("tour",  class="TourLondres\DashboardBundle\Entity\Tour")
     */
    public function semanalshowAction($_locale, Tour $tour)
    {

        $em = $this->getDoctrine()->getEntityManager();
        $tours = $em->getRepository('TourLondresDashboardBundle:Tour')->findAll();

        return $this->render('TourLondresTourBundle:Tours:'. $_locale . '_semanal_show.html.twig', array( 'template' => 'tourTemplate', 'currentTour' => $tour, 'tours' => $tours));
    }


}
